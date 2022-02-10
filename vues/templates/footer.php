
<script>

    function run_connexion() {
        //window.alert("success !"); => s'affiche je rentre dans ma fonction au clic

        $.ajax({
            url: "./vues/connexion.php", 
            dataType: "html", 
            
            success: function(response){
                //alert("success !");
                document.getElementById("Inscription").innerHTML = response;
            },

            error:function(error){
                console.log(error);
            }
        });
    }

    function run_inscription() {
        //window.alert("success !"); => s'affiche je rentre dans ma fonction au clic

        $.ajax({
            url: "./vues/inscription.php", 
            dataType: "html", 
            
            success: function(response){
                //alert("success !");
                document.getElementById("Inscription").innerHTML = response;
            },

            error:function(error){
                console.log(error);
            }
        });
    }

run_connexion()
run_inscription();

</script>