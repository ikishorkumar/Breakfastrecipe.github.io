function validate(){
    var result=true;
    var i = document.getElementsByTagName("input");
    for(i=0 , i <=5, i++){
        if (i.value.length==0)
            result =false;
    }
    return(result);
}
