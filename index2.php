<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>dischi php</title>
</head>
<body>
    <div class="container-fluid p-0 position-relative" id="app">


        <!-- intestazione -->
        <header class="position-absolute top-0 w-100">
            <div class="container-fluid w-75 py-3 ">
                <div class="row justify-content-between">
                    <!-- logo -->
                    <div class="col-4">
                    <i class="fas fa-compact-disc" style="line-height: inherit;"></i>
                    </div>

                    <!-- titolo -->
                    <div class="col-4 text-end">
                        <h1>Best Vinil</h1>
                    </div>
                </div>
            </div>
        
        </header>
    
    
        <!-- corpo pagina -->
        <main class="pt-5">
            <div class="container pt-5">
                <div class="row justify-content-around pt-5">

                     
                        <div class="card bg-dark m-2 p-2" style="width: 18rem;">
                            
                            
                                <img src="" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h2 class="mb-3" style="color: khaki;"></h5>
                                    <h4 class="my-0"></h4>
                                    <h4></h4>
                                    <h6 class="mt-4"></h6>
                                </div>
                                
                              
                        </div>
                    
                </div>
            </div>
        </main>
        
    </div>





    <!-- my js -->
    <script src="script.js"></script>
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- JS BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!-- Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->
