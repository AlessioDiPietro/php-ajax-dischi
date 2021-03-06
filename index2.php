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
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>dischi php</title>
    <!-- JS BOOSTRAP -->
</head>
<body>
    <div id="app">
        
        <div class="container-fluid p-0 position-relative">
            
            <!-- intestazione -->
            <header class="position-fixed top-0 w-100">
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

                    <!-- tutti i brani -->
                    <div class="row justify-content-around pt-5">
                        <h2>I tuoi brani:</h2>
                        
                        
                        <div class="card bg-dark m-2 p-2" style="width: 18rem;" v-for="music in arrayMusic">
                            
                            
                            <img :src="music.poster" class="card-img-top" :alt="music.title">
                            <div class="card-body text-center">
                                <h2 class="mb-3" style="color: khaki;">{{music.title}}</h5>
                                <h4 class="my-0">{{music.author}}</h4>
                                <h4>{{music.genre}}</h4>
                                <h6 class="mt-4">{{music.year}}</h6>
                            </div>
                                    
                                    
                        </div>
                                
                    </div>


                    <!-- branifiltrati -->
                    <div class="row justify-content-around pt-5">
                        <h2>I tuoi brani filtrati:</h2>
                        <input type="text" class="form-control mb-5" placeholder="GENERE" aria-label="GENERE" aria-describedby="basic-addon1" v-model="genreType" @keyup="getFilterGenre">
                        
                        
                        
                        <div class="card bg-dark m-2 p-2" style="width: 18rem;" v-for="fMusic in filterGenre">
                            
                            
                            <img :src="fMusic.poster" class="card-img-top" :alt="fMusic.title">
                            <div class="card-body text-center">
                                <h2 class="mb-3" style="color: khaki;">{{fMusic.title}}</h5>
                                <h4 class="my-0">{{fMusic.author}}</h4>
                                <h4>{{fMusic.genre}}</h4>
                                <h6 class="mt-4">{{fMusic.year}}</h6>
                            </div>
                                    
                                    
                        </div>
                                
                    </div>
                </div>
            </main>
            
        </div>
        
        
    </div>
    
    
    <!-- my js -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
</body>
</html>

<!-- Seconda Milestone:
Attraverso l???utilizzo di axios: al caricamento della pagina axios chieder??, attraverso una chiamata api, i dischi a php e li stamper?? attraverso vue.
Bonus:
Attraverso un???altra chiamata api, filtrare gli album per genere -->
