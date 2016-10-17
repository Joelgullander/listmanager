$(function(){
    renderUserList();
    newEntry();
    updateEntry();
    
    
    // Ska flyttas till säkrare fil senare ( admin permissions )
    getunapprovedEntrys();
    approveEntry();
    
    
    getdoorlist();
    confirmEntry();
    searchdoorlist();
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
        
        $.ajax({
            url: "api/listentry.php",
            method: "GET",
            data: {
                'entryID': entryID
            },
            success: function(data){
                data = $.parseJSON(data);
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        if(data[key]["age"] == 0){
                            var age = "Ja";
                        } else {
                            var age = "Nej";
                        }
                        modal.find("input[name=inputFirstname]").val(data[key]["firstname"]);
                        modal.find("input[name=inputLastname]").val(data[key]["lastname"]);
                        modal.find("select[name=inputAmount]").val(data[key]["amount"]);
                        modal.find("input[name=entryID]").val(entryID);
                        modal.find("select[name=inputAge]").val(age);
                        modal.find("textarea[name=inputComment]").val(data[key]["comment"]);
                    }
                }
            }
        });
        
        
        form.off('submit');
        form.on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "api/editEntry.php",
                method: "POST",
                data: form.serialize(), 
                success: function(data){
                    $(".your-list tbody").empty().hide();
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
                    $(".your-list tbody").append('<tr data-toggle="modal" data-target="#editEntry" class="' + (data[key]["status"] == 0 ? "warning" : "" || data[key]["status"] == 1 ? "success" : "" || data[key]["status"] == 2 ? "danger" : "") + '" id="' + data[key]["id"] +'"> <td class="firstname">' + data[key]["firstname"] + '</td> <td class="lastname">' + data[key]["lastname"] + '</td> <td class="amount">' + data[key]["amount"] + '</td>').fadeIn();
                }
            }
        }
    });
}


/* Should be admin permissions */
function getunapprovedEntrys(){
    if($("table.approve-list").length){
        $.ajax({
            url: "api/unapprovedentrys.php",
            method: "GET",
            success: function(data){
                data = $.parseJSON(data);
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        $(".approve-list tbody").append('<tr data-toggle="modal" data-target="#editEntry" class="' + (data[key]["approved"] == 1 ? "success" : "warning") + '" id="' + data[key]["id"] +'"> <td class="firstname">' + data[key]["firstname"] + '</td> <td class="lastname">' + data[key]["lastname"] + '</td> <td class="amount">' + data[key]["amount"] + '</td> <td class="amba">' + data[key]["username"] + '</td>').fadeIn();
                    }
                }
            }
        });
    } else {
        
    }
}

function approveEntry(){
    var entry = ".approve-list tbody tr";
    
    $(document).on('click', entry , function(){
        var me = $(this);
        var modal = $("#editEntry");
        var form = $("form#editEntry");
        
        var entryID = me.attr('id');
        var firstname = me.children("td.firstname").html();
        var lastname = me.children("td.lastname").html();
        var amount = me.children("td.amount").html();
        
        $.ajax({
            url: "api/listentry.php",
            method: "GET",
            data: {
                'entryID': entryID
            },
            success: function(data){
                data = $.parseJSON(data);
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        if(data[key]["age"] == 0){
                            var age = "Ja";
                        } else {
                            var age = "Nej";
                        }
                        modal.find("input[name=inputFirstname]").val(data[key]["firstname"]);
                        modal.find("input[name=inputLastname]").val(data[key]["lastname"]);
                        modal.find("select[name=inputAmount]").val(data[key]["amount"]);
                        modal.find("input[name=entryID]").val(entryID);
                        modal.find("select[name=inputAge]").val(age);
                        modal.find("textarea[name=inputComment]").val(data[key]["comment"]);
                    }
                }
            }
        });
        
        form.find("#unapprove").on("click", function(){
            $.ajax({
                url: "api/unapproveentry.php",
                method: "POST",
                data: form.serialize(), 
                success: function(data){
                    $(".approve-list tbody").empty().hide();;
                    getunapprovedEntrys();
                    modal.find(".close").click();
                }
            });
        });
        form.off('submit');
        form.on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "api/approveentry.php",
                method: "POST",
                data: form.serialize(), 
                success: function(data){
                    $(".approve-list tbody").empty().hide();;
                    getunapprovedEntrys();
                    modal.find(".close").click();
                }
            });
            
        });
    });
}




/* Doorlist */
function getdoorlist(){
    if($("table.door-list").length){
        $.ajax({
            url: "api/doorlist.php",
            method: "GET",
            success: function(data){
                data = $.parseJSON(data);
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        $(".door-list tbody").append('<tr data-toggle="modal" data-target="#editEntry" class="' + (data[key]["approved"] == 1 ? "success" : "warning") + '" id="' + data[key]["id"] +'"> <td class="firstname">' + data[key]["firstname"] + '</td> <td class="lastname">' + data[key]["lastname"] + '</td> <td class="amount">' + data[key]["amount"] + '</td> <td class="amba">' + data[key]["username"] + '</td> <td>' + (data[key]["age"] == 1 ? "Under 22" : "Över 22") + '</td>').fadeIn();
                    }
                }
            }
        });
    } else {
        
    }
}

function confirmEntry(){
    var entry = ".door-list tbody tr";
    
    $(document).on('click', entry , function(){
        var me = $(this);
        var modal = $("#editEntry");
        var form = $("form#editEntry");
        
        var entryID = me.attr('id');
        var firstname = me.children("td.firstname").html();
        var lastname = me.children("td.lastname").html();
        var amount = me.children("td.amount").html();
        
        $.ajax({
            url: "api/listentry.php",
            method: "GET",
            data: {
                'entryID': entryID
            },
            success: function(data){
                data = $.parseJSON(data);
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        modal.find("select[name=inputAmount]").val(data[key]["amount"]);
                        modal.find("input[name=entryID]").val(entryID);
                        modal.find("textarea[name=inputComment]").val(data[key]["comment"]);
                    }
                }
            }
        });
        
        form.find("#unapprove").on("click", function(){
            $.ajax({
                url: "api/rejectentry.php",
                method: "POST",
                data: form.serialize(), 
                success: function(data){
                    $(".approve-list tbody").empty().hide();;
                    getunapprovedEntrys();
                    modal.find(".close").click();
                }
            });
        });
        form.off('submit');
        form.on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url: "api/confirmentry.php",
                method: "POST",
                data: form.serialize(), 
                success: function(data){
                    $(".door-list tbody").empty().hide();;
                    getdoorlist();
                    modal.find(".close").click();
                }
            });
            
        });
    });
}

function searchdoorlist(){
     $('input.search').on("input", function(){
         var inputVal = $(this).val();
         console.log(inputVal)
        $.ajax({
            url: "api/doorlistsearch.php?key=" + inputVal,
            method: "GET",
            success: function(data){
                data = $.parseJSON(data);
                $(".door-list tbody").empty();
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        $(".door-list tbody").append('<tr data-toggle="modal" data-target="#editEntry" class="' + (data[key]["approved"] == 1 ? "success" : "warning") + '" id="' + data[key]["id"] +'"> <td class="firstname">' + data[key]["firstname"] + '</td> <td class="lastname">' + data[key]["lastname"] + '</td> <td class="amount">' + data[key]["amount"] + '</td> <td class="amba">' + data[key]["username"] + '</td> <td>' + (data[key]["age"] == 1 ? "Under 22" : "Över 22") + '</td>').fadeIn();
                    }
                }
            }
        });
         
        // name: 'search',
        // remote:'api/doorlistsearch.php?key=%QUERY',
        // limit : 10
    });
}