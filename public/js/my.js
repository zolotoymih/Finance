function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight) + "px";
}

$(document).ready(function () {

    let buttonsEdit = document.querySelectorAll('.button-edit');
    let existedReports = $(buttonsEdit).map((i, e) => +$(e).val()).get();

    $(buttonsEdit).map((i, e) => {
        console.log($(e).data('type-report'));
    });

    let buttonsDelete = document.querySelectorAll('.button-delete');

    $('button.btn-warning').click(function () {
        console.log($(this).attr('value'));
        console.log($(this).val());
    });

    $("tr").on("keypress", ".border-none", function (e) {
        if (e.which != 13) BaseRecord.checkPressedKeyNumber(e)
        else BaseRecord.actionEnterPressed(this);
    });

    $("tr").on("blur", ".border-none", function () {
        BaseRecord.pasteBeatyNumber(this);
    });

    $('select[name="kind_reports"]').change(function () {
        ReportCreationRecord.activateSelect(this, existedReports)
    });

    $('select[name="type_reports"]').change(function () {
        ReportCreationRecord.reportToCreate.type_report_id = this.value
    });

    $('select[name="periods"]').change(function () {
        ReportCreationRecord.reportToCreate.period_id = this.value
    });

    $('#but').click(function () {
        ReportCreationRecord.sendCreatedReport()
    });

    buttonsDelete.forEach(button => button.addEventListener('click', ReportCreationRecord.deleteReport));


});

let ReportCreationRecord = {

    reportToCreate: {},

    alertSomething: function (e) {
        console.log(e, " HELLO")
    },

    activateSelect: function (select, existedReports) {

        let activeIndex = select.value;

        $('select[name="type_reports"] option:eq(0)').prop('selected', true);

        $('select[name="type_reports"]').prop('disabled', false);

        $('select[name="type_reports"] option').each((ind, elem) => {

            if ($(elem).attr('data-kind-report') === activeIndex
              || !existedReports.includes($(elem).val()) ) {
                $(elem).attr('style', 'display:block;');
            } else {
                $(elem).attr('style', 'display:none;');
            }
        });
    },

    sendCreatedReport: function () {
        this.reportToCreate.edrpou_id = document.querySelector('#edrpou').value;
        let content = this.reportToCreate;
        let tokenHeader = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('reports', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': tokenHeader,
            },
            body: JSON.stringify(content)
        }).then((response) => {
            return response.json();
        }).then((data) => {
            this.showReports(data)
        }).catch((error) => {
            console.log(error)
        })
    },

    deleteReport: function (even) {
        let report = even.target.value;
        let tokenHeader = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('reports/' + report, {
            method: 'delete',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': tokenHeader,
            },
            body: JSON.stringify(report)
        }).then(response => {
            if (response.ok) {
                return response.json()
            } else {
                return Promise.reject('something went wrong!')
            }
        }).then((data) => {
            ReportCreationRecord.showReports(data)
        }).catch((error) => {
            console.log(error)
        })

    },

    showReports: function (reports) {
        let reportsTable = document.querySelector('#reports-table');
        reportsTable.innerHTML = '';
        console.log(reportsTable);
        for (let report in reports) {
            console.log(reports[report].name);
            reportsTable.innerHTML += `<tr class="d-flex">
                    <td width="75%"><a href="">${reports[report].name}</a></td>
                    <td width="5%">${reports[report].code}</td>
                    <td width="20%">
                        <button class="btn btn-warning button-edit" value="${reports[report].id}" type="button">Редагувати
                        </button>
                        <button class="btn btn-danger button-delete" value="${reports[report].id}" type="button">Видалити
                        </button>
                    </td>
                </tr>`
        }
    },

};

let BaseRecord = {

    pasteBeatyNumber: function (e) {
        let str = $(e).val();
        if (str != "") {
            str = this.convertToNumber(str);
            str = new Intl.NumberFormat('ru-RU', {
                maximumFractionDigits: 2,
                minimumFractionDigits: 1,
                minimumIntegerDigits: 1
            }).format(str)
            $(e).val(str);
        }
    },

    convertToNumber: function (str) {
        let number;
        if (/^,/.test(str)) number = parseFloat(str.replace(/^,/, "0."));
        else number = parseFloat(str.replace(/,/, "."));
        return number;
    },

    actionEnterPressed: function (e) {
        this.pasteBeatyNumber(e);
        event.preventDefault();
        // trap the return key being pressed
        // console.log($(this).val() +"   "+ e.which);
        // insert 2 br tags (if only one br tag is inserted the cursor won't go to the next line)
        //document.execCommand('insertHTML', false, '<br/>');
        // prevent the default behaviour of return key pressed
        //$(event.target).parents('td').nextAll().find('.border-none').first().focus();
        //event.stopPropagation();
        this.start(e);
        $(e).blur();
        //this.insert(e.val());
        return false;

    },

    checkPressedKeyNumber: function (e) {
        //console.log(e.keyCode);
        let arrKey = [13, 44, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57];
        if (!arrKey.some(x => x == e.keyCode)) {
            e.preventDefault();
        }
        ;
    },

    start: function (e) {
        //console.log(this + " " + e.target);
        let elem_id = $(e).attr('id');
        let AP = elem_id.substr(0, 1);
        let count_id = elem_id.substr(1, 4);

        var count = [["1000", ["1001", "1002"]],
            ["1010", ["1011", "1012"]],
            ["1020", ["1021", "1022"]],
            ["1040", ["1041", "1042"]],
        ];

        var count1095 = ["1000", "1010", "1020", "1030", "1040", "1050", "1060", "1090"];
        for (var i in count) {
            for (var j in count[i]) {
                if (count[i][j].indexOf(count_id) !== -1) {
                    let sum_count = count[i][0];
                    let sum = this.sum(count[i][j], AP);
                    let name_coul = "#" + AP + sum_count;
                    $(name_coul).val(sum);
                }
            }
        }

        let sum = this.sum(count1095, AP);
        let sum_count = "1095";
        let name_coul = "#" + AP + sum_count;
        $(name_coul).val(sum);


    },

    sum: function (count, AP) {
        let sum = 0;
        let dodanok;
        for (var i in count) {
            let name_coul = "#" + AP + count[i];
            dodanok = this.convertToNumber($(name_coul).val());
            if (!dodanok) dodanok = 0;
            sum += dodanok;
        }
        return sum;
    },

    insert: function (value) {
        //     var ajaxSetting={
        //         method:"post",
        //         url:"",
        //alert(value);
        //         data:"hook="+value,
        //         success:function(data) {
        //             //location.href="/index.php";
        //         },
        //     };
        //     $.ajax(ajaxSetting);
    },
};








