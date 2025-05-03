<?php 

include_once 'controllers/comment.php';
$com = new comment();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist attractions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <style>

        .tr{
            width: 100%;
            min-height: 100vh; /* ให้สูงเต็มหน้าจอ */
            margin: 0;
            padding: 0;
            background-color: transparent;
            background-image: url(https://image.makewebcdn.com/makeweb/m_1920x0/pMrtkmxgt/Porpeang%2FBG_01_copy.jpg?v=202405291424);
            background-repeat: no-repeat;
            background-size: cover; /* ให้รูปเต็มจอด้วย */
            background-attachment: fixed;
            font-family: "Kanit", sans-serif;
            box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.6);
            

            .tourist-info{
                justify-content: center;
                align-items: center;
                display: flex;
                flex-direction: column;
                align-items: center;

                .tourist-info-title{
                    text-align: center;
                    margin-top: 2rem;

                    h2{
                        font-size: clamp(2rem, 10vw, 35px);
                        margin: 1rem;
                        color:rgb(218, 196, 196) ;
                        
                    }

                    p{
                        font-size: clamp(1rem, 10vw, 15px);
                        margin-bottom: 3rem;
                        color:rgb(243, 239, 239) ;
                    }
                }

                .tourist-info-item{
                    
                    

                    h3{
                        font-size: clamp(1rem, 10vw, 25px);
                        color:rgb(62, 208, 196) ;
                        
                    }

                    img{
                        height: 400px;
                        max-width: 600px;
                        /* border-radius: 10px; */
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
                        margin: 1rem;
                    }

                    p{  
                        gap: 9px ;
                        font-size: clamp(1rem, 10vw, 18px);
                        margin-bottom:2rem;
                        max-width: 650px;
                        text-align: start;
                        color:rgb(243, 239, 239);
                        padding: 1rem;

                    }
                }
            }   

            .box{
                border: none;
                border-radius: 10px;
                margin: 30px auto 0;
                padding: 20px;
                width: 1000px;
                height: 250px;
                overflow: scroll;
                background-color: rgba(255, 255, 255, 0.4);
                box-shadow: 0 5px 15px rgba(26, 25, 25, 0.5);

                ul{
                    margin: 0;
                    padding: 0;
                    list-style: none;

                    li{
                        display: block;
                        border-bottom: 1px dashed #ddd;
                        margin-bottom: 5px;
                        padding-bottom: 5px;
                        font-size: clamp(1rem, 10vw, 20px);
                        color: rgb(102, 61, 47);
                    }

                    .box li:last-child{
                        border-bottom: 0 dashed #ddd;
                     }

                     .box span{
                         color: #888;
                    }
                }
            }

            form{
                table{
                    tr{
                        td{
                            color:rgb(242, 228, 228) ;

                            .ip{
                                border-radius: 10px;
                                padding: 1rem;
                            }

                            .btn{
                                border-radius: 10px;
                                border: none;
                                background-color: rgb(210, 153, 66);
                                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
                                margin-bottom: 3rem;
                                
                            }

                            .btn:hover{
                                background-color: rgb(221, 181, 122);
                            }
                        }
                    }
                }
            }


            @media screen and (max-width: 768px) {
                padding: 1rem;
                
                .tourist-info-title h2 {
                    font-size: 24px;
                }

                .tourist-info-title p {
                    font-size: 14px;
                 }

                .tourist-info-item h3 {
                    font-size: 20px;
                }

                .tourist-info-item img {
                    width: 90%;
                    height: auto;
                }

                .tourist-info-item p {
                    font-size: 14px;
                    padding: 0.5rem;
                }

                .box {
                    width: 90%;
                    height: 200px;
                }

                form table {
                    width: 100%;
                }

                form table td .ip {
                    width: 90%;
                }

                form table td .btn {
                    width: 90%;
                    padding: 0.8rem;
                }
            }
            

        }

        
    </style>
    



</head>
<body class="tr" >

<section class="tourist">
    <div class="container">
        <div class="tourist-info">


                <div class="tourist-info-title">
                    <h2>อำเภอเมืองเชียงใหม่🚩</h2>
                    <p>เริ่มต้นเที่ยวเชียงใหม่กันกับ "อำเภอเมืองเชียงใหม่" 
                        สถานที่ที่เต็มไปด้วยศิลปะและวัฒนธรรมสไตล์ล้านนา <br>คราคร่ำไปด้วยผู้คน 
                        แต่ถึงอย่างนั้นก็ยังคงเป็นสถานที่พักผ่อนเชียงใหม่ยอดฮิตขวัญใจชาวสโลว์ไลฟ์หลาย ๆ คน🌍⛺</p>
                </div>

                <div class="tourist-info-item">
                    <h3>1. วัดพระธาตุดอยสุเทพราชวรวิหาร</h3>
                    <img src="img/1.jpg" alt="">
                    <p>"วัดพระธาตุดอยสุเทพฯ" อีกหนึ่งแลนด์มาร์กสำคัญของจังหวัดเชียงใหม่ ใครที่มาเที่ยวเชียงใหม่แต่ไม่ได้มากราบไหว้ก็เหมือนมาไม่ถึง 
                        พร้อมกับเยี่ยมชมสถาปัตยกรรมแบบล้านนาจากการสร้างเจดีย์ทรงเชียงแสนและชื่นชมความงามของจังหวัดเชียงใหม่จากจุดชมวิวบนวัดพระธาตุดอยสุเทพฯแห่งนี้ 
                        ลงจากดอยสุเทพมุ่งหน้าต่อไปที่เขตติดต่อแม่ริมยังมีอีกหนึ่งวัดให้สักการะขอพรกันอย่างเต็มที่ เชื่อได้เลยว่ากลับบ้านไปออร่าคนอิ่มบุญฟุ้งกระจายแน่นอน</p>
                </div>

                <div class="tourist-info-item">
                    <h3>2. One Nimman</h3>
                    <img src="img/2.webp" alt="">
                    <p>เริ่มต้นด้วยที่เที่ยวนิมมานย่านชิค ๆ ที่เปรียบเสมือนสตรีทอาร์ตของจังหวัดเชียงใหม่อย่าง "One Nimman" 
                        ที่ตั้งอยู่บนถนนนิมมานเหมินทร์ เป็นย่านสังคมฮิปสเตอร์และสถานที่เที่ยวเชียงใหม่สุดแนวอีกแห่งหนึ่งของจังหวัด 
                        เดินทางสะดวกจะขับรถมาเองหรือนั่งรถแดงจากในตัวเมืองก็ได้ ที่นี่เป็นแหล่งนัดพบสังสรรค์กับเพื่อน ๆ 
                        มีทั้งร้านอาหาร ร้านขายของฝาก ร้านแฟชั่น รวมถึงมุมสวย ๆ ไว้ถ่ายรูป เผลอ ๆ นึกว่าอยู่มิลานกันเลยทีเดียว</p>
                </div>

                <div class="tourist-info-item">
                    <h3>3. ถนนคนเดินท่าแพ</h3>
                    <img src="img/3.jpg" alt="">
                    <p>"ถนนคนเดินท่าแพ" 
                        เป็นย่านสตรีทที่โด่งดังและใหญ่ที่สุดในเชียงใหม่มีอาหาร เครื่องประดับตกแต่ง เสื้อผ้า 
                        และของที่ระลึกพื้นเมืองที่สามารถซื้อให้ตัวเองก็ได้ หรือจะหิ้วไปฝากคนรู้จักก็ดี เหมาะกับมาเดินเล่นชิล ๆ 
                        ในยามกลางคืนพร้อมรับอากาศหนาวแบบฟิน ๆ ส่วนถ้ามาเที่ยวเชียงใหม่หน้าร้อนเดือนเมษา เพื่อน ๆ 
                        ก็สามารถมาเล่นน้ำสงกรานต์ที่คูเมืองหรือประตูท่าแพนี้ได้</p>
                </div>
                
                <div class="tourist-info-item">
                    <h3>4. อ่างแก้ว</h3>
                    <img src="img/4..jpg" alt="">
                    <p>"อ่างแก้ว" อ่างเก็บน้ำขนาดใหญ่ในมหาวิทยาลัยเชียงใหม่ สำหรับนั่งชิล ถ่ายรูป 
                        เช็กอินและชื่นชมความสวยงามของพระอาทิตย์ที่กำลังขึ้นหรือลับลาขอบฟ้า ไหน ๆ ก็มาถึงมหาวิทยาลัยเชียงใหม่แล้ว 
                        อย่าลืมแวะไปโดนร้านอาหารเก่าแก่อย่างร้าน Boat Bakery ที่เปรียบเหมือนซิกเนเจอร์ของจังหวัดเชียงใหม่ 
                        หรือจะเป็นร้านซุปกระดูกแม่โจ้  สุดแซ่บ และอีก 30 ร้านเด็ดย่านหน้า มช. ที่เราได้คัดสรรมาให้เพื่อน ๆ 
                        ได้แวะกินเติมพลังกันก่อนที่จะมุ่งหน้าขึ้นดอย ผ่านโค้งสปิริต เพื่อไปกราบไหว้สิ่งศักดิ์สิทธิ์คู่บ้านคู่เมืองเชียงใหม่อีกที่หนึ่ง</p>
                </div>

                <div class="tourist-info-item">
                    <h3>5. ถนนคนเดินวัวลาย</h3>
                    <img src="img/5.jpg" alt="">
                    <p>ที่เที่ยวเชียงใหม่และแหล่งชอปบรรยากาศชิล ๆ อีกหนึ่งที่ของจังหวัดเชียงใหม่ 
                        มีสินค้าและผลิตภัณฑ์แบบศิลปะล้านนามากมายมาให้เลือกชมเลือกชอปกันเต็มที่ ทั้งผ้าซิ่น เครื่องเงินต่าง ๆ 
                        หรือของร้านอาหารรสเด็ดก็มี ไม่ว่าจะเป็นบะหมี่เกี๊ยวจากร้าน แม่จันทร์ หมี่เกี๊ยว หรือขนมเบเกอรีโฮมเมดอบใหม่วันต่อวัน 
                        เป็นที่โจษจันของคนเชียงใหม่อย่างร้านบ้านเบเกอรี่ โฮมเมด และอีก 15 ร้านอาหารเด็ดถนนวัวลาย</p>
                </div>





                <div class="tourist-info-title">
                    <h2>อำเภอแม่แจ่ม🚩</h2>
                    <p>อำเภอแม่แจ่ม ดินแดนทางตะวันตกเฉียงใต้ของจังหวัดเชียงใหม่ ที่เต็มไปด้วยธรรมชาติและสวนไม้นานาพันธ์ุ 
                        <br>แต่ก่อนที่จะเริ่มทัวร์กันกองทัพก็ต้องเดินด้วยท้อง เพราะฉะนั้นเราควรแวะเติมพลังในตัวเมืองเชียงใหม่กันก่อน
                        <br>กับ 20 ร้านอาหารเช้าเชียงใหม่ รับอรุณ🌍⛺</p>
                </div>

                <div class="tourist-info-item">
                    <h3>6. อุทยานแห่งชาติดอยอินทนนท์</h3>
                    <img src="img/6.jpg" alt="">
                    <p>เริ่มต้นกันด้วยดอยที่สูงที่สุดของประเทศไทยอย่าง "ดอยอินทนนท์"  หนึ่งในที่เที่ยวเชียงใหม่ยอดฮิต 
                        ที่นอกจากจะได้ทั้งความหนาว และความหวาดเสียวแล้ว ที่นี่ยังมีพืชไม้ยืนต้น ไม้ดอก แม่น้ำ 
                        และน้ำตกให้นักท่องเที่ยวได้ยลโฉมความงามของธรรมชาติอีกด้วย ถัดจากที่นี่ไปไม่ถึง 5 กิโลเมตร 
                        ยังมีสถานที่ท่องเที่ยวเชียงใหม่ที่เต็มไปด้วยพืชไม้เมืองหนาวอยู่อีกด้วย</p>
                </div>

                <div class="tourist-info-item">
                    <h3>7. สถานีเกษตรหลวงอินทนนท์</h3>
                    <img src="img/7.jpg" alt="">
                    <p>เดินทางผ่านทางหลวงหมายเลข 1009 จะเจอแหล่งเพาะพันธ์ุไม้ดอกของเมืองหนาวอย่าง 
                        "สถานีเกษตรหลวงอินทนนท์" ที่เต็มไปด้วยดอกไม้หลากหลายชนิด เช่น ดอกลาเวนเดอร์ กล้วยไม้ 
                        หรือซากุระประเทศไทยอย่างพญาเสือโคร่ง เป็นอีกหนึ่งจุดถ่ายรูปสวยของเชียงใหม่เหมาะแก่การเซลฟีเอาไปอวดเพื่อน ๆ 
                        ให้อิจฉาเล่น ๆ เซลฟีเสร็จแล้ว ขยับมากันอีกนิดไปชมน้ำตกบนดอย ที่ใครจะไปคิดว่าที่เที่ยวเชียงใหม่แบบนี้ก็มีด้วย!</p>
                </div>

                <div class="tourist-info-item">
                    <h3>8. น้ำตกสิริภูมิ</h3>
                    <img src="img/8.jpg" alt="">
                    <p>"น้ำตกสิริภูมิ" ที่เที่ยวเชียงใหม่ที่อยู่ห่างจากสถานีเกษตรเพียง 11 นาทีเท่านั้น เดินเลาะขึ้นดอยอินทนนท์ไปเล็กน้อยก็ถึงที่หมาย 
                        ถือเป็นที่เที่ยวเชียงใหม่ธรรมชาติที่มีระบบนิเวศน์สมบูรณ์ รายล้อมด้วยต้นพญาเสือโคร่ง 
                        เหมือนกับว่าทั้งพื้นที่ปกคลุมไปด้วยสีชมพูของดอกซากุระและสีเขียวของไม้ป่า สวยงาม คุ้มค่าการเดินทาง ต่อไปจะพาไปชมนากันบ้าง 
                        สงสัยล่ะสิว่าทุ่งนาจะเป็นสถานที่ท่องเที่ยวเชียงใหม่ได้ยังไง อย่ามัวรอช้า เดินหน้ากันต่อเลย Go!</p>
                </div>
                
                <div class="tourist-info-item">
                    <h3>9. บ้านป่าบงเปียง</h3>
                    <img src="img/9.jpg" alt="">
                    <p>"โฮมสเตย์บ้านป่าบงเบียง" สถานที่พักผ่อนเชียงใหม่ที่เปิดให้ชื่นชมศิลปะจากนาข้าวขั้นบันไดของชาวบ้านในอำเภอแม่แจ่ม 
                        และกล่าวสายัณห์สวัสดิ์พร้อมกับชมดวงอาทิตย์ที่ลาลับขอบฟ้า ที่นี่ยังเปิดเป็นโฮมสเตย์สามารถพักผ่อนนอนหลับและกินอาหารเด็ด ๆ 
                        ของอำเภอแม่แจ่มอีกด้วย หากใครสนใจอยากรู้รายละเอียดเพิ่มเติม สามารถไปส่องรีวืว หนีรักมาพักใจในป่าบงเปียง ได้เลย และก่อนจากแม่แจ่มกันไป 
                        ยังมีอีกหนึ่งน้ำตกที่มีชื่อแปลกหู และเป็นน้ำตกที่มีประวัติยาวนานอยู่ไม่ไกลจากที่บ้านป่าปงเปียงมากนัก เพียง 10 กิโลเมตรเอง</p>
                </div>

                <div class="tourist-info-item">
                    <h3>10.  นาข้าวขั้นบันได บ้านกองกาน</h3>
                    <img src="img/10.jpg" alt="">
                    <p>นาขั้นบันไดบ้านกองกาน นาขั้นบันไดป่าปงเปียง และนาขั้นบันไดบ้านแม่ปาน นอกจากนั้นบริเวณทางขึ้นดอยอินทนนท์ก่อนถึง 
                        อ.แม่แจ่ม ยังมีนาขั้นบันไดบ้านแม่กลางหลวงที่พร้อมให้นักท่องเที่ยวมาเยี่ยมชม โดยนาขั้นบันไดจะเขียวชอุ่มยามหน้าฝน ระหว่างเดือน ส.ค. ถึง ก.ย. 
                        หรือช่วงที่นาขั้นบันไดออกรวงกลายเป็นสีทองเหลืองอร่าม</p>
                </div>
        
                
            </div>
        </div>
    </div>
</section>

<div class="box">
  <div class="container">
    <ul>
        <?php 
            $result = $com->index();
            if($result = $com->index()){
            while ($data = $result->fetch_assoc()) { 
        ?>
        <li>
            <b><?php echo $data['name']; ?></b>-<?php echo $data['comment']; ?> - <?php echo $com->dataFormat($data['comment_time']); ?>
        </li>
        <?php } ?>
       <?php } ?>
    </ul>
  </div>
</div>

<br><br>

<center>
<?php  

    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo "<span style='color: green; font-size: 20px'>".$msg."</span>";
    }

?>


<form action="post_comment.php" method="post" >
  <div class="container">
    <table>
        <tr>
            <td>Your name</td>
            <td><input class="ip" type="text" name="name" placeholder="Please enter your name" style="width: 230px; height: 30px; "></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td>
                <textarea class="ip" name="comment" cols="30" rows="10" placeholder="Please enter your comment"></textarea>
            </td>
        </tr>
        <tr>
            <td><input class="btn" type="submit" value="post" name="submit" style="width: 150px; height: 40px;"></td>
        </tr>
    </table>
  </div>
</form>
</center>  
  
</body>
</html>