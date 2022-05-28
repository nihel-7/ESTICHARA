$(document).ready(function(){
  var rowcount, addbtn, tableBody, imgpath, basepath;
  addbtn=$("#addNew");
  rowcount=$("#autocomplete_table tbody tr").length+1;
  tableBody=$("#autocomplete_table tbody");

  function formHtml(){
      var html ='<tr id="row_'+rowcount+'">';
        html+='<td><input type="search" class="typeahead form-control" name="medicament[]" id="medicament_'+rowcount+'" placeholder="" autocomplete="off">';
        html+='</td>';
        html+='<td><input type="text" class="typeahead form-control" name="auto[]" id="unite_'+rowcount+'" placeholder="" autocomplete="off">';
        html+='</td>';
        html+='<td><center><input type="checkbox" class="form-check-input" name="ch1[]" id="exampleCheck_'+rowcount+'"></center>';
        html+='</td>';
        html+='<td><center><input type="checkbox" class="form-check-input" name="ch2[]" id="exampleCheck_'+rowcount+'"></center>';
        html+='</td>';
        html+='<td><center><input type="checkbox" class="form-check-input" name="ch3[]" id="exampleCheck_'+rowcount+'"></center>';
        html+='</td>';
        html+='<td><center><input type="checkbox" class="form-check-input" name="ch4[]" id="exampleCheck_'+rowcount+'"></center>';
        html+='</td>';
        html+='<td><input type="search" class="typeahead form-control" name="auto2[]" id="forme_'+rowcount+'" placeholder="" autocomplete="off">';
        html+='</td>';
        html+='<td><button type="button" class="btn btn-danger" id="delete_'+rowcount+'"><i class="glyphicon glyphicon-minus"></i>';
        html+='</td>';
        html+='</tr>';
        rowcount++;
        return html;
  }

  function addNewRow()
  {
    var html =formHtml();
    console.log(html);
    tableBody.append(html);
  }

  function registerEvents(){
    addbtn.on('click',addNewRow);

  }
  registerEvents();
});