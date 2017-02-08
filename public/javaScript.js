$(document).ready(function(){

//Asinhrona pretraga search forme
    $('#rez').hide();
    $('#searchq').on('input',function () {
        var searchq = $('#searchq').val();
        $.ajax({
            type:"GET",
            url:"search_news",
            data:{news:searchq},
            success: function(data) {
                if(data) {
                    $('#rez').slideDown();
                    $('#rez').html(data);
                }else{
                    $('#rez').slideUp(2000);
                }
            }
        });

    });
//------------------------------------------------------
    $('.dropdown').hover(function(){
        $('.dropdown-toggle', this).trigger('click');
    });

//Poruka o uspesnosti
    $('#poruka').fadeOut(4000);
   $('#dobrodosao').slideUp(5000);

    /**
     * This object controls the nav bar. Implement the add and remove
     * action over the elements of the nav bar that we want to change.
     *
     * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
     */
    var myNavBar = {

        flagAdd: true,

        elements: [],

        init: function (elements) {
            this.elements = elements;
        },

        add : function() {
            if(this.flagAdd) {
                for(var i=0; i < this.elements.length; i++) {
                    document.getElementById(this.elements[i]).className += " fixed-theme";
                }
                this.flagAdd = false;
            }
        },

        remove: function() {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
            }
            this.flagAdd = true;
        }

    };

    /**
     * Init the object. Pass the object the array of elements
     * that we want to change when the scroll goes down
     */
    myNavBar.init(  [
        "header",
        "header-container",
        "brand"
    ]);

    /**
     * Function that manage the direction
     * of the scroll
     */
    function offSetManager(){

        var yOffset = 0;
        var currYOffSet = window.pageYOffset;

        if(yOffset < currYOffSet) {
            myNavBar.add();
        }
        else if(currYOffSet == yOffset){
            myNavBar.remove();
        }

    }

    /**
     * bind to the document scroll detection
     */
    window.onscroll = function(e) {
        offSetManager();
    }

    /**
     * We have to do a first detectation of offset because the page
     * could be load with scroll down set.
     */
    offSetManager();
});
//------------------------------------------------------------------------
function optionValue($value){

    if($value == 'mladenovac') {

        $('#load').load('../resources/sekcije/mladenovac.html');
    }
    if($value === 'info') {
        $('#load').load('../resources/sekcije/info.html');
    }
    if($value == 'sport') {
        $('#load').load('../resources/sekcije/sport.html');
    }

    if($value == 'zabava') {
        $('#load').load('../resources/sekcije/zabava.html');
    }

}
//---------------------------------------------------------------------------
//Validacija forme Pisite nam
function form_validate(){
    var name = document.validate_form.name.value;
    var mess = document.validate_form.message.value;
    var form_name = document.getElementById('form_name');
    var form_mess = document.getElementById('form_message');

    if(name == ""){
      form_name.innerHTML = 'Forma sa imenom ne sme biti prazna';
        return false;
    }

    if(mess == ""){
        form_mess.innerHTML='Forma sa porukom ne sme biti prazna';
        return false;
    }
}
//-----------------------------------------












