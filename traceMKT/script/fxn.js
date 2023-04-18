      $(document).ready(function(){
        let screen = innerWidth;
        if(screen<765){
          mobileView();
        }else{
          desktopView()
        }
        //::nav Linnks
        $('#home').click(function(){
          $('#home').addClass('bg-success');
          toHome();

        });
        //toggle Nav
        $('.nav-box').click(function(){
          $('.nav-container').toggle('slow');
          $('.nav-box').toggle();
          $('#cancel').toggle();
          $('.src-box').hide('slow');
        });
        $('#cancel').click(function(){
          $('.nav-container').toggle('slow');
          $('#cancel').toggle();
          $('.nav-box').toggle();
          $('.src-box').show('slow');
        });
        //toggle src input
        $('#src-icon').click(function(){
         $('#src').toggle('slow');
        });

        //:::::::::::::::
        //::::  fnx  ::::
        //:::::::::::::::
        function mobileView(){
          //register mobile view
        $('#regLnk').click(function(){
          $('#cancel').toggle();
          $('.nav-container').toggle('slow');
          $('.nav-box').toggle();
          $('.src-box').toggle('slow');
          toReg();
        });
        }

        function desktopView(){
          //register Desktop view 
        $('#regLnk').click(function(){
          toReg();
        });
        }

        function toHome(){
            window.location.href='../php/index.php';
          }
        function toReg(){
            location.href='../php/beamember.php';
          }
          //alert msg
         
      });