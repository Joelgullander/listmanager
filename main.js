$(function(){
    renderUserList();
    newEntry();
    updateEntry();
    
    
    // Ska flyttas till säkrare fil senare ( admin permissions )
    getunapprovedEntrys();
});

function newEntry(){
    var form = $("form#newEntry");
    
    form.on("submit", function(e){
        e.preventDefault();
        
        $.ajax({
            url: "api/newEntry.php",
            method: "POST",
            data: form.serialize(), 
            success: function(data){
                $(".your-list tbody").empty().hide();;
                renderUserList();
            }
        });
        
    });
}

function updateEntry(){
    var entry = ".your-list tbody tr";
    
    $(document).on('click', entry , function(){
        var me = $(this);
        var modal = $("#editEntry");
        var form = $("form#editEntry");
        
        var entryID = me.attr('id');
        var firstname = me.children("td.firstname").html();
        var lastname = me.children("td.lastname").html();
        var amount = me.children("td.amount").html();
        
        modal.find("input[name=inputFirstname]").val(firstname);
        modal.find("input[name=inputLastname]").val(lastname);
        modal.find("select[name=inputAmount]").val(amount);
        modal.find("input[name=entryID]").val(entryID);
        
        form.off('submit');
        form.on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "api/editEntry.php",
                method: "POST",
                data: form.serialize(), 
                success: function(data){
                    $(".your-list tbody").empty().hide();;
                    renderUserList();
                    modal.find(".close").click();
                }
            });
            
        });
    });
}

function renderUserList(){
    $.ajax({
        url: "api/listentrys.php",
        method: "GET",
        success: function(data){
            data = $.parseJSON(data);
            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    $(".your-list tbody").append('<tr data-toggle="modal" data-target="#editEntry" class="' + (data[key]["approved"] == 1 ? "success" : "warning") + '" id="' + data[key]["id"] +'"> <td class="firstname">' + data[key]["firstname"] + '</td> <td class="lastname">' + data[key]["lastname"] + '</td> <td class="amount">' + data[key]["amount"] + '</td>').fadeIn();
                }
            }
        }
    });
}

function getunapprovedEntrys(){
    if($("table.approve-list").length){
        $.ajax({
            url: "api/unapprovedentrys.php",
            method: "GET",
            success: function(data){
                data = $.parseJSON(data);
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        $(".approve-list tbody").append('<tr data-toggle="modal" data-target="#editEntry" class="' + (data[key]["approved"] == 1 ? "success" : "warning") + '" id="' + data[key]["id"] +'"> <td class="firstname">' + data[key]["firstname"] + '</td> <td class="lastname">' + data[key]["lastname"] + '</td> <td class="amount">' + data[key]["amount"] + '</td>').fadeIn();
                    }
                }
            }
        });
    } else {
        
    }
}
function approvelistEntrys(){
    $.ajax({
        url: "api/listentrys.php",
        method: "GET",
        success: function(data){
            data = $.parseJSON(data);
            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    $(".your-list tbody").append('<tr data-toggle="modal" data-target="#editEntry" class="' + (data[key]["approved"] == 1 ? "success" : "warning") + '" id="' + data[key]["id"] +'"> <td class="firstname">' + data[key]["firstname"] + '</td> <td class="lastname">' + data[key]["lastname"] + '</td> <td class="amount">' + data[key]["amount"] + '</td>').fadeIn();
                }
            }
        }
    });
}