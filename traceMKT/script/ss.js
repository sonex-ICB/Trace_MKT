$(document).ready(function(){
    $('#btn').click(function(){
        let fname = $('#fname');
        let phone = $('#phone');
        let email = $('#email');
        fname = fname.val();
        phone = phone.val();
        email = email.val();
        if(!fname||!phone||!email){
            rbt('err','Please complete All fields','alert alert-warning p-1');
        }else{
            let person = {
                name:fname,
                phone:phone,
                email:email
            }
            //const myJSON = JSON.stringify(person);
           $.post('scripts/server.php',{reqName:reqName,person},function(data){
            alert(data);
           });
        }
    });
    function rbt(elt,txt,cls){
        elt=$('#'+elt);
        elt.text(txt);
        elt.addClass(cls);
      }
});