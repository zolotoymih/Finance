function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight) + "px";
}

$(document).ready(function () {


    $("tr").on("keypress", ".border-none", function (e) {
        if (e.which != 13) BaseRecord.checkPressedKeyNumber(e)
        else BaseRecord.actionEnterPressed(this);
    });

    $("tr").on("blur", ".border-none", function () {
        BaseRecord.pasteBeatyNumber(this);
    });

    $('select[name="kind_reports"]').change(function () {ReportCreationRecord.activateSelect(this)});

    $('select[name="type_reports"]').change(function () { ReportCreationRecord.reportToCreate.type_reports = this.value});

    $('select[name="periods"]').change(function () { ReportCreationRecord.reportToCreate.periods = this.value});

    $('#but').click(function () { ReportCreationRecord.sendCreatedReport()});

    $('#test').click(function () { console.log("hello")});



});

let ReportCreationRecord = {

    reportToCreate: {},

    alertSomething: function () {
        console.log(this.reportToCreate)
    },

    activateSelect: function (select) {

        this.reportToCreate.kind_reports = select.value;

        let activeIndex = select.value;

        $('select[name="type_reports"]').prop('disabled', false);

        $('select[name="type_reports"] option').each((ind, elem) => {

            if ($(elem).attr('data-kind-report') === activeIndex) {
                $(elem).attr('style', 'display:block;');
            } else {
                $(elem).attr('style', 'display:none;');
            }
        });
    },

    sendCreatedReport: function () {
        let content = this.reportToCreate;
        let tokenHeader = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        console.log(tokenHeader);

        fetch('reports', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': tokenHeader,
            },
            body: JSON.stringify(content)
        }).then((response)=>{
            return response.json();
        }).then((data)=>{
            console.log(data)
        }).catch((error)=>{
            console.log(error)
        })
    }

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








