
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}


$(document).ready(function() {
$("body").on("click", ".td_select", function(e){
  //BaseRecord.start();
  console.log(this+" "+e.target);
});
/* $('td').keydown(function(event){
    if(event.keyCode==13){
	  BaseRecord.start();

  };
  alert("heli"); */
/* }); */

$('.border-none').keypress(function(e) {
    // trap the return key being pressed
    // console.log($(this).val() +"   "+ e.which);
    console.log(e.keyCode);
    let arrKey = [13,44,48,49,50,51,52,53,54,55,56,57]
    if (!arrKey.some(x => x==e.keyCode)) return false
    if (e.keyCode === 13) {
        // insert 2 br tags (if only one br tag is inserted the cursor won't go to the next line)
        document.execCommand('insertHTML', false, '<br/>');
        // prevent the default behaviour of return key pressed
        //$(event.target).parents('td').nextAll().find('.border-none').first().focus();
        event.preventDefault();
		event.stopPropagation();
		BaseRecord.start($(this));
        BaseRecord.insert($(this).val());
        return false;
    };
});

});

var BaseRecord={

start:function(elem) {
	elem_id = elem.attr('id');
	AP = elem_id.substr(0,1);
	count_id = elem_id.substr(1,4);

     var count = [ ["1000",["1001", "1002"]] ,
	 ["1010",["1011", "1012"] ],
	 ["1020",["1021", "1022"] ],
	 ["1040",["1041", "1042"] ],
	 ];

	var count1095 =["1000", "1010", "1020", "1030", "1040", "1050", "1060", "1090"];
	 for(var i in count) {
		for(var j in count[i]) {
			if(count[i][j].indexOf(count_id)!==-1) {
		sum_count = count[i][0];
		sum = this.sum(count[i][j], AP);
	   name_coul = "#"+AP+sum_count;
	   $(name_coul).val(sum);


            }
		}
	 }

	   sum = this.sum(count1095, AP);
	   sum_count = "1095";
	   name_coul = "#"+AP+sum_count;
	   $(name_coul).val(sum);


	},

sum:function(count, AP) {
	var sum=0;
	for (var i in count) {
        name_coul = "#"+AP+count[i];
         sum+=Number($(name_coul).val());
        //alert(name_coul);

    }
      return sum;
	},

insert:function(value) {
    //     var ajaxSetting={
    //         method:"post",
    //         url:"",
             alert(value);
    //         data:"hook="+value,
    //         success:function(data) {
    //             //location.href="/index.php";
    //         },
    //     };
    //     $.ajax(ajaxSetting);
    },
};
