

// all fetch data
           
    function showdata() {

        $.ajax({
            url: "http://localhost/rest_api/apiall.php",
            type: 'GET',
            success: function (result) {
                if (result.status == false) {
                
                    $("#showtable").append("<tr><td colspan='6'><h2>" + result.message + "</h2></td></tr>");
                
                } else {
                    $("#showtable").html('');
                    $.each(result, function (key, value) {
                        $("#showtable").append("<tr>"
                            + "<td>" + value.id + "</td>"
                            + "<td>" + value.name + "</td>" 
                            + "<td>" + value.email + "</td>"
                            + "<td>" + value.password + "</td>"
                            + "<td> <a href='1.php?id=" + value.id + "'' id='eid' class='edit'  >Edit</a></td>" 
                            + "<td><button class='delete' data-did='"+ value.id + "'>Delete</button></td>" 
                            + "</tr>");
                        
                    });
                }
            }               
        
        });
    }
    showdata();

    function showupdateddata() {
        let url_new  = window.location.href;
        var url = new URL(url_new);
        var userid = url.searchParams.get("id");
        var obj = { id: userid };
        var myJSON = JSON.stringify(obj);
        $.ajax({
            url: "http://localhost/rest_api/apisingle.php",
            type: 'POST',
            data: myJSON,
            success: function (data) {
                let test = data.replaceAll("'",'"');
                let data2 = JSON.parse(test);
                $("#name").val(data2[0].name);
                $("#email").val(data2[0].email);
                $("#password").val(data2[0].password);
              
            }     
        });
        // document.getElementById("insert").innerHTML = "Update"
    }
     showupdateddata();


    // show message
    function message(message, status) {
        if (status == true) {
            $("#success-message").html(message).slideDown();
            $("#error-message").slideUp();
            setTimeout(function () {
                $("#success-message").slideUp();
            }, 4000);

        } else if (status == false) {
            $("#error-message").html(message).slideDown();
            $("#success-message").slideUp();
            setTimeout(function () {
                $("#error-message").slideUp();
            }, 4000);
        }
    }


    // json data insert
    function jsonData() {
        var arr = $("#myform").serializeArray();

        var obj = {};
        for (var a = 0; a < arr.length; a++) {
            if (arr[a].value == "") {
                return false;
            }
            obj[arr[a].name] = arr[a].value;
        }
        var json_string = JSON.stringify(obj);

        return json_string;
    }

    // insert
    $("#insert").on("click", function (e) {
        e.preventDefault();
        var jsonObj = jsonData("#myform");
        if (jsonObj == false) {
            message("All Fields are required.", false);
        } else {
            $.ajax({
                url: 'http://localhost/rest_api/insert.php',
                type: "POST",
                data: jsonObj,
                success: function (result) {
                
                    // message(result.message, result.status);

                    if (result.status == true) {
                        showdata();
                        $("#myform").trigger("reset");
                    }
                }
            });
        }

    });

    // delete 
    $(document).on("click", ".delete", function () {
        if (confirm("Do you really want to delete this record ? ")) {
            var userid = $(this).data("did");
            var obj = { id: userid };
            var myJSON = JSON.stringify(obj);
            var row = this;
            $.ajax({
                url: 'http://localhost/rest_api/delete.php',
                type: "POST",
                data: myJSON,
                success: function (result) {

                    message(result.message, result.status);

                    if (result.status == true) {

                        $(row).closest("tr").fadeOut();
                    }
                }

            });
        }
    });
   


    $("#submit").on("click",function(e){
        e.preventDefault();
    
        var jsonObj = jsonData("#myform");
    
        if( jsonObj == false){
          message("All Fields are required.",false);
        }else{
          $.ajax({ 
          url : 'http://localhost/php-rest-api/update.php',
          type : "POST",
          data : jsonObj,
          success : function(data){
              cosole.log(data);
           
    
            if(data.status == true){
            //   $("#modal").hide();
            //   loadTable();
            }
          }
        });
      }
      });

