// item,gid,pos,price,image
formValidation(){
  var name= document.fname;
  var price=document.menu.price;
  var group=document.menu.gid;
  var subgroup=document.menu.pos;
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
