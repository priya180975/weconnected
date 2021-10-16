$(document).ready(
    function(){
        $('#profile__type').change(function () {
            var optionSelected = $(this).find("option:selected");
            var valueSelected  = optionSelected.val();
            var textSelected   = optionSelected.text();
            console.log(valueSelected);

            if(valueSelected=="Student")
            {
                $("#user__course__div").removeClass("display--none")
                $("#student__course__year__div").removeClass("display--none")
                $("#profile__committee__div").addClass("display--none")
            }
            else if(valueSelected=="Teacher"||valueSelected=="Alumni")
            {
                $("#user__course__div").removeClass("display--none")
                $("#profile__committee__div").addClass("display--none")
                $("#student__course__year__div").addClass("display--none")
            }
            else if(valueSelected=="Staff")
            {
                console.log(valueSelected)
                $("#user__course__div").addClass("display--none")
                $("#profile__committee__div").addClass("display--none");
                $("#student__course__year__div").addClass("display--none")
            }
            else if(valueSelected="Committee/department")
            {
                $("#profile__committee__div").removeClass("display--none")
                $("#student__course__year__div").addClass("display--none")
                $("#user__course__div").removeClass("display--none")
            }
        })
    }
);