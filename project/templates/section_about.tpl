 <section id="about" class="s-about target-section">

        <div class="row section-header" data-aos="fade-up">
         <!--    <div class="col-full">
                <h3 data-num="01" class="subhead">Who We Are</h3>
                <h1 class="display-1">
                Stellar is a branding agency based in Somewhere. We design thoughtful digital 
                experiences and beautiful brand aesthetics.
                </h1>
                <p class="lead">
                Quia iusto totam facilis ut atque quidem quis maiores iure. Facilis mollitia enim illo sed et totam commodi. Velit a recusandae sequi consequatur est dolorum. Eaque accusantium praesentium ut omnis. Laboriosam reprehenderit commodi assumenda.
                </p>
            </div> -->
        </div>

        <div class="row about-process block-1-2 block-tab-full">

            <div class="col-block item-process" data-aos="fade-up" id="area_bar" style="display: none">
                <div class="item-process__header item-process__header--planning">
                    <h3>ANN Model</h3>
                        <div>
                            <canvas id="barChart" height="250"></canvas>
                        </div>
                </div>
                <!-- graph1 -->
            </div>
            <div class="col-block item-process" data-aos="fade-up" id="area_scatter" style="display: none">
                <div class="item-process__header item-process__header--branding">
                    <h3>AF Model</h3>
                        <div>
                            <canvas id="barChart2" height="250"></canvas>
                        </div>
                </div>
              <!-- graph1 -->
                <div>
                    
                </div>
            </div>
           <!--  <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__header item-process__header--implementation">
                    <h3>Implementation</h3>
                </div>
               
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__header item-process__header--documentation">
                    <h3>Documentation</h3>
                </div>
              
            </div> -->
       
        </div>  <!-- end about-process -->
        <div style="padding-left: 160px">
            <div class="home-content__button">
                <a class=" btn btn-animatedbg2" onclick="show_analysis_result()">
                    <p >Show Predict Score</p>
                </a>
            </div>
        </div>
    </section> <!-- end s-about -->
     <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/plugins/c3/c3.min.js"></script>
    <script src="js/plugins/d3/d3.min.js"></script>

   <!--  ANN
has lstm,mv,ann ,num_tree =  18000 accuracy =  0.5552941176470588'''
has lstm,mf,0.8094117647058824'''
has lstm,doc,0.883921568627451'''
# No lstm , ranker = 'mv' , num_tree =  20000 , accuracy =  0.7806603773584906
    # No lstm , ranker = 'doc' , num_tree =  20000, accuracy =  0.7915980230642504
    # No lstm , ranker = 'mf' , num_tree =  20000 , accuracy =  0.7771481853392627

AF
no lstm,af, max_iter = 10000,preference = -30,accuracy = 0.7640094711917916
 no lstm,af,mf, accuracy = 0.7521704814522494
 no lstm,af,doc, accuracy = 0.7561168113654302
 has lstm,mv,accuracy =  0.7670588235294118
 has lstm,mf,accuracy =  0.8462745098039216 -40
 has lstm,doc,accuracy = 0.8525490196078431, preference = -40-->
{literal}
<script type="text/javascript">
    function show_analysis_result(){
        $('#area_bar').show();
        $('#area_scatter').show();
        var ANN_barData = {
            labels: ["Major Voting", "Doc2Vec", "Weighted Matrix Factorization"],
            datasets: [
                {
                    label: "With BILSTM",
                    backgroundColor: 'rgba(26,179,148,0.5)',
                    borderColor: "rgba(26,179,148,0.7)",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [0.5552941176470588, 0.8094117647058824, 0.883921568627451]
                },
                {
                    label: "With Average",
                    backgroundColor: 'rgba(220, 220, 220, 0.5)',
                    pointBorderColor: "#fff",
                    data: [0.6806603773584906, 0.7315980230642504, 0.7771481853392627]
                }
             
            ]
        };
        var AF_barData = {
            labels: ["Major Voting", "Doc2Vec", "Weighted Matrix Factorization"],
            datasets: [
                {
                    label: "With BILSTM",
                    backgroundColor: 'rgba(26,179,148,0.5)',
                    borderColor: "rgba(26,179,148,0.7)",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [0.7670588235294118,  0.8462745098039216, 0.8525490196078431]
                },
                {
                    label: "With Average",
                    backgroundColor: 'rgba(220, 220, 220, 0.5)',
                    pointBorderColor: "#fff",
                    data: [0.7640094711917916, 0.7521704814522494, 0.7561168113654302]
                }
                
            ]
        };
        var barOptions = {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max:1
                    }
                }]
            }
       }


        var ctx2 = document.getElementById("barChart").getContext("2d");
        new Chart(ctx2, {type: 'bar', data: ANN_barData, options:barOptions ,  scaleStartValue : 0 });

        var ctx = document.getElementById("barChart2").getContext("2d");
        new Chart(ctx, {type: 'bar', data: AF_barData, options:barOptions ,  scaleStartValue : 0 });


       //-----------------------------------------//
    
        // c3.generate({
        //         bindto: '#scatter',
        //         data:{
        //             xs:{
        //                 data1: 'data1_x',
        //                 data2: 'data2_x'
        //             },
        //             columns: [
        //                 ["data1_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
        //                 ["data2_x", 3.3, 2.7, 3.0, 2.9, 3.0, 3.0, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3.0, 2.5, 2.8, 3.2, 3.0, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3.0, 2.8, 3.0, 2.8, 3.8, 2.8, 2.8, 2.6, 3.0, 3.4, 3.1, 3.0, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3.0, 2.5, 3.0, 3.4, 3.0],
        //                 ["data1", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
        //                 ["data2", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8]
        //             ],
        //             colors:{
        //                 data1: '#1ab394',
        //                 data2: '#BABABA'
        //             },
        //             type: 'scatter'
        //         }
        //     });
    }

</script>
{/literal}