<!DOCTYPE html>
<html lang="en">
<?php
        session_start();
        $email = $_SESSION['user']['email'];
        include("dbconnect.php");
        // Your PHP code for fetching newsletter data
        $sql2 = "SELECT * from newsletter";
        $resNews = $conn->query($sql2);
        ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar start -->
    <?php include("usernav.php"); ?>
    <!-- Navbar End -->

    <header>
    </header>

    <main>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <div class="blog-div">
                    <div class="blog-1">
                        <div class="card">
                            <img src="../imagest/po-pic7.jpg" class="card-img-top object-fit-contain" alt="">
                            <div class="card-body">
                                <h5 class="card-title single-head"><b>ပဲမျိုးစုံ၊ ပြောင်း၊ နှမ်းတို့အတွက်
                                        ပို့ကုန်သွင်းကုန်နှင့်ပတ်သက်သော သတင်းလွှာ ၂/၂ဝ၂ဝ
                                        ကို ပယ်ဖျက်</b></h5>
                                <p class="card-text single-text ">
                                    <b>အကြောင်းအရာ။ ။ </b>. ပဲမျိုးစုံ၊ ပြောင်း၊ နှမ်းတို့အတွက်
                                    တစ်ဆင့်မြင့်ပြုပြင်ထုတ်လုပ်နိုင်သော အခြေအနေများကို ထုတ်ပြန်ထားသည့်
                                    ပို့ကုန်သွင်းကုန်နှင့်ပတ်သက်သော သတင်းလွှာ ၂/၂ဝ၂ဝ ကို ပယ်ဖျက်ခြင်း
                                    နိုင်ငံခြားကုမ္ပဏီများနှင့် နိုင်ငံခြားဖက်စပ်ကုမ္ပဏီများအား အမိန့်ကြော်ငြာစာအမှတ် ၂၄/
                                    ၂၀၁၉ ဖြင့် ပြည်ပသို့တင်ပို့ခွင့်ပြုခဲ့သည့် ကုန်ပစ္စည်းအုပ်စု(၇)မျိုးတွင် ပါဝင်သော
                                    တစ်ဆင့် မြင့်ပြုပြင် ထုတ်လုပ်ထားသော ကောက်ပဲသီးနှံများနှင့်စပ်လျဉ်း၍
                                    ရှင်းလင်းစွာသိရှိဆောင်ရွက် နိုင်ရန်အတွက် ပဲမျိုးစုံ၊ ပြောင်းနှင့် နှမ်းတို့အတွက်
                                    တစ်ဆင့်မြင့်ပြုပြင်ထုတ်လုပ်နိုင်သော ထုတ် ကုန်အခြေအနေများကို
                                    ပို့ကုန်သွင်းကုန်နှင့်ပတ်သက်သော သတင်းလွှာ(၂/၂၀၂၀)ဖြင့် အသိပေး ထုတ်ပြန်ခဲ့ပါသည်။
                                    ယခုအခါ အချို့သော နိုင်ငံခြားကုမ္ပဏီများသည် သတင်းလွှာ(၂/၂၀၂၀)ပါ ဖော်ပြချက် တချို့အပေါ်
                                    အခြေခံ၍ ပဲမျိုးစုံ၊ ပြောင်း၊ နှမ်းတို့ကို တစ်ဆင့်မြင့်ပြုပြင် ထုတ်လုပ်ခြင်းမရှိဘဲ
                                    တစ်ဆင့်မြင့်ပြုပြင်ထုတ်လုပ်ထားသော ကောက်ပဲသီးနှံများအဖြစ် တင်ပို့လျက်ရှိကြောင်း စိစစ်
                                    တွေ့ရှိရပါသည်။
                                    သို့ဖြစ်၍ ပဲမျိုးစုံ၊ ပြောင်းနှမ်းတို့အတွက် တစ်ဆင့်မြင့်ပြုပြင်ထုတ်လုပ်နိုင်သော ထုတ်
                                    ကုန်အခြေအနေနှင့်စပ်လျဉ်းသည့် ပို့ကုန်သွင်းကုန်နှင့်ပတ်သက်သော သတင်းလွှာ(၂/၂၀၂၀)ကို
                                    ဤသတင်းလွှာဖြင့် လွှမ်းမိုးပယ်ဖျက်လိုက်သည်။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-2 col-lg-4">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item categories">
                            <?php
                            if ($resNews->num_rows > 0) {
                                while ($rowNew = $resNews->fetch_assoc()) {
                            ?>
                                    <div class="post-item clearfix">
                                        <div class="post-item-img mb-3">
                                            <img class="  mb-3 mr-20" src="images/<?php echo $rowNew['newsimg'] ?>" alt="Image not found" >
                                        </div>
                                        <div class="post-item-text">
                                            <h4>
                                                <a href="#"><b><?php echo $rowNew['title']; ?></b></a>
                                            </h4>
                                            <i><?php echo $rowNew['publishdate']; ?></i>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer start -->
    <?php include("userfooter.php"); ?>
    <!-- Footer End -->

    <!-- Js links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="script.js"></script>
</body>

</html>
