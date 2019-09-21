<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <canvas id="my_chart"></canvas>
    canvas not supported...
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script>
        (function (){
            'user strict';
            let type = 'line';
            let data = {
                labels:[2010,2011,2012,2013],
                datasets:[{
                    label:'@taguchi',
                    data:[120,130,100,90],
                    borderColor:'red',
                    borderWidth:5,
                    fill:false, //塗りつぶしやめる
                    pointStyle:'rect' //点を□

                },{
                    label:'@fkoji',
                    data:[90,80,120,210],
                    borderColor:'blue',
                    borderWidth:5,
                    backgroundColor:'rgba(0,0,255,0.3)',
                    lineTension:0, //曲線表示をやめる
                    pointStyle:'triangle'// 点を三角
                }]
            };
            let options = {
                scales:{
                    yAxes:[{
                        ticks:{
                            // min:0,
                            // max:500
                            suggestedMin:0,
                            suggestedMax:200,
                            stepSize:100,
                            callback : function(value,index,values){
                                return 'JPY' + value; //軸の前に言葉追加
                            }
                        }
                    }]
                },
                title:{
                    display:true,
                    text:'Anu',
                    fontSize:18,
                    position:'left' //左に表示
                },
                animation:{
                    duration:0
                },
                legend:{
                    position:'right'  //カテゴリー表示
                    //display:false  //表示なし
                }
            };
            let ctx = document.getElementById('my_chart').getContext('2d');
            let myChart = new Chart (ctx,{
                type:type,
                data:data,
                options:options
            });

        })();
    </script>

</body>
</html>