alert("this is test;");
formValidation(){
  var name= document.menu.itemName;
  var price=document.menu.itemPrice;
  var group=document.menu.gid;
  var subgroup=document.menu.sid;
  if(alphanumeric(name)){
    if(allLeter(price)){
      if(group==0){
        if(subgroup==0){

        }
      }
    }
  }
    return false;
}
