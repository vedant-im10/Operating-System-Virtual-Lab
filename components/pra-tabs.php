<html lang="en">
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='../assets/css/style.css' rel='stylesheet' />
    <link href='../assets/css/tabs.css' rel='stylesheet' />
    <script src="../assets/js/tabs.js"></script>
    <body>
        <div class="tabs-container flex-layout ">
            <div data-tab="fifo" class="pra tab h4 active-tab flex-layout justify-center items-center text-uppercase">
                FIFO
            </div>
            <div data-tab="lifo" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
                LIFO
            </div>
            <div data-tab="lru" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
                LRU
            </div>
            <div data-tab="optimal" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
                Optimal
            </div>
            <div data-tab="random" class="pra tab h4 flex-layout justify-center items-center text-uppercase">
                Random
            </div>
        </div>
        
        <div id="fifo" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>First In First Out</h1>
            </div>
        </div>
        <div id="lifo" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>Last In First Out</h1>
            </div>
        </div>
        <div id="lru" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>least recently used</h1>
            </div>
        </div>
        <div id="optimal" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>optimal</h1>
            </div>
        </div>
        <div id="random" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>random</h1>
            </div>
        </div>
    </body>
    
</html>
