function changeActive(ele){
    if(ele.className=="active"){
        ele.innerHTML = 'Inactive';
        ele.className='inactive';
    }
    else{
        ele.innerHTML = 'Active';
        ele.className='active';
    }
    ele.innerHTML += '<i class="fa fa-repeat"></i>';
}

activetds = document.querySelectorAll('td[class]');
for (let i = 0; i < activetds.length; i++) {
    const ele = activetds[i];
    ele.onclick = function(){
        if(confirm('Are you sure, you want to set this Product as '+(ele.className=='active'?'Inactive':'Active')+' ?'))
            changeActive(this)
    }
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}