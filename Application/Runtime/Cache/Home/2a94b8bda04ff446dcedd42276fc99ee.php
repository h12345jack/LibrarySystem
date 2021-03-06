<?php if (!defined('THINK_PATH')) exit();?>

<html >

<head>
    <meta charset="utf-8">
    <title>博雅图书馆，读书使人进步</title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="htmlcoder.me">
    <!-- Mobile Meta -->
    <style type="text/css">
    body{
        font-family: '黑体';
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/lib2/Public/QD/images/favicon.ico">
    <!-- Web Fonts -->
    <!-- Bootstrap core CSS -->
    <link href="/lib2/Public/QD/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="/lib2/Public/QD/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Plugins -->
    <link href="/lib2/Public/QD/css/animations.css" rel="stylesheet">
    <!-- Worthy core CSS file -->
    <link href="/lib2/Public/QD/css/style.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="/lib2/Public/QD/css/custom.css" rel="stylesheet">
</head>

<body class="no-trans">
    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop"><i class="icon-up-open-big"></i></div>
    <!-- header start -->
    <!-- ================ -->
    <header class="header fixed clearfix navbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- header-left start -->
                    <!-- ================ -->
                    <div class="header-left clearfix">
                        <!-- logo -->
                        <div class="logo smooth-scroll">
                            <a href="#banner"><img id="logo" src="/lib2/Public/QD/images/logo.png" alt="Worthy"></a>
                        </div>
                        <!-- name-and-slogan -->
                        <div class="site-name-and-slogan smooth-scroll">
                            <div class="site-name">博雅图书馆</div>
                            <div class="site-slogan">The time is passing. 時間在流逝。
                            </div>
                        </div>
                    </div>
                    <!-- header-left end -->
                </div>
                <div class="col-md-8">
                    <!-- header-right start -->
                    <!-- ================ -->
                    <div class="header-right clearfix">
                        <!-- main-navigation start -->
                        <!-- ================ -->
                        <div class="main-navigation animated">
                            <!-- navbar start -->
                            <!-- ================ -->
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">
                                    <!-- Toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="#banner">主页</a></li>
                                            <li><a href="#about">关于我们</a></li>
                                            <li><a href="#services">文化服务</a></li>
                                            <li><a href="#clients">好评如潮</a></li>
                                            <li><a href="#contact">联系我们</a></li>
                                            <li><a href="<?php echo U('PublicUse/Login/index');?>">登陆后台</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- navbar end -->
                        </div>
                        <!-- main-navigation end -->
                    </div>
                    <!-- header-right end -->
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- banner start -->
    <!-- ================ -->
    <div id="banner" class="banner">
        <div class="banner-image"></div>
        <div class="banner-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                        <h1 class="text-center"><span class="fa fa-book">书籍，</span>人类进步的阶梯</h1>
                        <form method="post" action="<?php echo U('Home/Index/search');?>">
                            <div class="input-group input-group-lg ">
                                <input type="text" class="form-control" placeholder="输入您的检索词" name="term" id="js">
                                <span class="input-group-btn">
                             <button class="btn btn-success" type="submit">检索一下</button>
                            </span>
                            </div>
                            <div class="input-group input-group-lg">
                                <label class="radio-inline">
                                    <input type="radio" name="query" id="inlineRadio1" value="2" checked/> 标题
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="query" id="inlineRadio2" value="3"/> 作者
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="query" id="inlineRadio3" value="4"/> 出版年
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="query" id="inlineRadio4" value="5"/> 出版社
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="query" id="inlineRadio5" value="6"/> 摘要
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- section start -->
    <!-- ================ -->
    <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="about" class="title text-center">关于 <span>博雅图书馆</span></h1>
                    <p class="lead text-center">《后汉书·杜林传》：“博雅多通，称为任职相。”《明史·李默传》：“ 默博雅有才辨，以气自豪。”</p>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/lib2/Public/QD/images/section-image-1.png" alt="">
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6">
                            <p>未名湖，始建于清乾隆年间。现为燕园著名景观。湖西北端立一石，上刻‘未名湖’ 三字，系侯仁之教授题写。”湖四岸一任乱石堆砌，不事雕琢，古朴自然，最能张扬其“散 漫”的个性。或清晨或黄昏，在这堤岸上一站，其所得“倚石得奇想，看云多远怀”的高雅 情致，实不让渊明先生的“采菊东篱下，悠然见南山”。
                            </p>
                            <p>
                                “1924年7月，燕京大学为解决全校生活用水，在此掘水井一口，井深164尺，水质 清澈，水源丰足，喷水高于地面十余尺，喷水量达每小时16000加仑（合60560公升）。水塔 是当时为深水井专造的塔式木楼建筑。塔型仿初建于北周时代的通州燃灯塔。因系美国人博 氏捐资兴建，故又称‘博雅塔’。”
                            </p>
                            <p>北大赵为民先生云，曾以“博雅塔”为题出上联，征下联而考学子。 上联：博雅塔前人博雅。席间余即兴对曰：未名湖畔我未名 归来细酌，以为“博雅塔”对“未名湖”乃天成佳联，不需添足也。
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                    <h2>图书馆</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p>图书馆是收集、整理、保管、传递文献信息载体的社会组织。它起源于文字创始和典籍产生以后,人们为了保存和传递这些记载人类活动和思想的文字资料,将它们进行编排,由专门人员管理,存放在特定的处所,供给人们使用。</p>
                            <p>这种处所就具备了原始图书馆的基本特征。在西方,人们认为公元前三四千年古埃及和美索不达米亚的古巴比伦和亚述就已具备了形成图书馆的条件。
                            </p>
                            <p>
                                从公元前约1700年的汉谟拉比法典推断,当时已有保存大量法律文献的处所。公元前625年,亚述国王亚塞班尼波在尼尼微城设立的泥版书图书馆遗址,迄今仍然存在。在我国,公元前1300年以前已经“有册有典”。殷商时代甲骨文的藏窖,是迄今见到的最早的文献保存遗址。公元前5世纪的周代守藏室是已知有文献记载的早期政府图书馆。图书馆事业是一种社会现象,在人类文明建设中具有重要作用。</p>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">馆舍
												</a>
											</h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            目前的馆舍由1975年落成的西楼与1998年落成的东楼相连而成，外观具盛唐风格，宏伟大气；坐落于校园中心，观之如知识圣殿。建筑面积近53000平方米，设施先进，环境舒适，恰是读书学习的好去处，也是拍照留念的好景观。
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													藏书
												</a>
											</h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            到2011年底，纸质文献馆藏总量近800万册（件），电子图书达到276万种，中外文数据库500个，另有音像资料5.6万余件，自建特色数据库近20种、超过100TB。“汗牛充栋”远不能比喻馆藏之丰富，“书山”、“智海”或能勉强形容之。
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													服务
												</a>
											</h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            随着信息科技的不断发展，图书馆的服务由传统的借还书、阅览等向多元化功能发展，数字资源服务、读者自助服务、学科馆员服务、阅读推广服务等新的服务手段和方式不断拓展。馆际互借和文献传递可以帮助读者“足不出户”而获取本馆没有的资料，学科竞争力分析可以帮助机构或个人了解学术发展状况和趋势。
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <!-- section start -->
    <!-- ================ -->
    <div class="section translucent-bg bg-image-1 blue">
        <div class="container object-non-visible" data-animation-effect="fadeIn">
            <h1 id="services" class="text-center title">我们的服务</h1>
            <div class="space"></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="media">
                        <div class="media-body text-left">
                            <h4 class="media-heading"><i class="fa fa-cog"></i>光荣的历史</h4>
                            <p>一百多年来，经过几代北大图书馆人的辛勤努力，北京大学图书馆形成了宏大丰富、学科齐全、珍品荟萃的馆藏体系。到2011年底，总、分馆文献资源累积量约1,100余万册（件）。其中纸质藏书800余万册，以及近年来大量引进和自建的国内外数字资源，包括各类数据库、电子期刊、电子图书和多媒体资源约300余万册（件）。馆藏中以150万册中文古籍为世界瞩目，其中20万件5至18世纪的珍贵书籍，是中华民族的文化瑰宝，被国务院批准为首批国家重点古籍保护单位。外文善本、金石拓片、1949年前出版物的收藏均名列国内图书馆前茅，为研究家所珍视。此外，还有燕京大学学位论文、名人捐赠等特色收藏。</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body text-right">
                            <h4 class="media-heading">公共服务体系</h4>
                            <p>北京大学图书馆的办馆宗旨是“兼收并蓄 传承文明 创新服务 和谐发展”，坚持“以研究为基础，以服务为主导”的办馆理念，以数字图书馆门户为窗口，为读者提供信息查询、书刊借阅、信息与课题咨询、馆际互借与文献传递、用户培训、教学参考资料、多媒体资源、学科馆员、软件应用支持等服务，成为北京大学教学科研中最重要的公共服务体系之一。</p>
                        </div>
                        <div class="media-right">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body text-left">
                            <h4 class="media-heading"><i class="fa fa-desktop"></i>数字图书馆建设</h4>
                            <p>北京大学图书馆非常重视数字图书馆的研究和建设。2000年与校内其它单位联合成立的北京大学数字图书馆研究所开展了有关数字图书馆模式、标准规范、数据模型、关键技术、互操作层与互操作标准、数字图书馆门户等的研究，取得了一系列成果，并开始大规模应用实践，为北京大学数字图书馆的建设奠定了技术基础。</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body text-right">
                            <h4 class="media-heading">高校图书馆服务</h4>
                            <p>北京大学图书馆还努力为全国高校图书馆服务，积极参与图书馆资源共建共享，并逐步加快国际化的步伐。目前，中国高等教育文献保障系统（CALIS）的管理中心和全国文理中心、中国高校人文社会科学文献中心（CASHL）的管理中心和全国中心、高校图书馆数字资源采购联盟（DRAA）秘书处、教育部高校图书情报工作指导委员会秘书处、中国图书馆学会高校分会秘书处、《大学图书馆学报》编辑部等机构设在北京大学图书馆。北京大学图书馆作为中国高等教育文献资源共享的重要枢纽，为高校图书馆事业的发展做出了积极的贡献。</p>
                        </div>
                        <div class="media-left">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
                <div class="space visible-xs"></div>
                <div class="col-sm-12">
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">人才建设</h4>
                            <p>1918年，李大钊任北京大学图书馆主任，对原有工作人员提出新的要求，同时采用公开招聘、考核的方式录用新的工作人员，还聘用文化素质较高的大学生担任“助教式”工作人员，一支高水平的专业队伍开始逐步形成。1923年，袁同礼任图书馆主任，他是中国现代第一批具有图书馆学知识背景的专门人才，对于促进图书馆队伍的专业化具有推动作用。1929年，马衡任图书馆主任，请来武昌文化大学图书馆专科高年级学生帮助整理积压西文图书，表明当时图书馆对专业人才的重视，同时也表明图书馆在相关人才方面还相当缺乏。1952年，燕京大学图书馆并入北京大学图书馆，增加了新的专业力量，如后来任副馆长的梁思庄，毕业于美国哥伦比亚大学，获图书馆学硕士学位，在西文编目方面卓有成绩。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <!-- section start -->
    <!-- ================ -->
    <div class="default-bg space blue">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-center">即使現在，對手也不停地翻動書頁。</h1>
                    <h3>Even if the present, the match does not stop changes the page.</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <!-- section start -->
    <!-- ================ -->
    <!-- section end -->
    <!-- section start -->
    <!-- ================ -->
    <div class="section translucent-bg bg-image-2 pb-clear">
        <div class="container object-non-visible" data-animation-effect="fadeIn">
            <h1 id="clients" class="title text-center">师生们的赞扬</h1>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="media testimonial">
                        <div class="media-left">
                            <img src="/lib2/Public/QD/images/testimonial-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">博雅气韵</h3>
                            <blockquote>
                                <p>博观约取以下笔有神，雅致天成似荆山之玉</p>
                                <footer>中文系11级本 
                                    <cite title="Source Title">程灵素</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media testimonial">
                        <div class="media-left">
                            <img src="/lib2/Public/QD/images/testimonial-2.png" alt="">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">美的气息!</h3>
                            <blockquote>
                                <p>I博雅的界面清新简洁，力求美观的同时也会突出图书信息的重点，在埋首书山时也能感到美的气息</p>
                                <footer>政府管理学院13级本
                                    <cite title="Source Title">段誉</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media testimonial">
                        <div class="media-left">
                            <img src="/lib2/Public/QD/images/testimonial-3.png" alt="">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">服务一流!</h3>
                            <blockquote>
                                <p>博雅图书馆的图书检索服务十分贴心，能让我能迅速找到可以利用的资源，点一万个赞！</p>
                                <footer>社会学系12级硕
                                    <cite title="Source Title">任盈盈</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="media testimonial">
                        <div class="media-left">
                            <img src="/lib2/Public/QD/images/testimonial-2.png" alt="">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">学友社区!</h3>
                            <blockquote>
                                <p>在博雅可以发现有相同阅读兴趣的书友，以文会友，以友辅仁乃是人生一大快事！</p>
                                <footer>化学分子与工程学院13级本
                                    <cite title="Source Title">乔峰</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media testimonial">
                        <div class="media-left">
                            <img src="/lib2/Public/QD/images/testimonial-3.png" alt="">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">知识发现!</h3>
                            <blockquote>
                                <p>只有你想不到的图书，没有你查不到的信息。小伙伴们快快一起来博雅发现知识财富吧 ：P</p>
                                <footer>物理学院13级博
                                    <cite title="Source Title">周伯通</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media testimonial">
                        <div class="media-left">
                            <img src="/lib2/Public/QD/images/testimonial-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">男神制造，品质保证!</h3>
                            <blockquote>
                                <p>信管男神张增黄黄强哥联手倾情奉献，果然DuangDuangDuang特技满天飞，不试不知道哦。</p>
                                <footer>信息科学与技术学院 11级本 
                                    <cite title="Source Title">欧阳锋</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section start -->
        <!-- ================ -->
        
        <!-- section end -->
    </div>
    <!-- section end -->
    <!-- section start -->
    <!-- ================ -->
    <div class="default-bg space">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-center">10000+<i class="glyphicon glyphicon-thumbs-up"></i> 好评如潮!</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <!-- footer start -->
    <!-- ================ -->
    <footer id="footer">
        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer section">
            <div class="container">
                <h1 class="title text-center" id="contact">联系我们</h1>
                <div class="space"></div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-content">
                            <p class="large">小组成员主要包括<strong>u know nothing(闫张增)</strong>、<strong>Doris<i class="fa fa-gittip"></i> 芯（李沁芯）</strong>、<strong>A勤劳勇敢的同学(黄俊杰)</strong>、<strong>雅涵（李雅涵）</strong>、<strong>依韵（付强）</strong>,我们致力于把<strong>数据库的知识</strong>用在实践中，普及<mark>范式</mark>，<mark>集合</mark>，<mark>关系数据库</mark>等概念是我们的责任和义务，并且我们将会在未来的日子里，迎接新的数据库时代的到来。世界是数据库大家族的，也是关系数据库的，但是归根结底是数据库大家族的。第三代数据库朝气蓬勃，正在兴旺时期，好像早晨八、九点钟的太阳。 </p>
                            <p class="glyphicon glyphicon-flag
">希望寄托在第三代数据库身上。世界是属于第三代数据库的。 </p>
                            <ul class="list-icons">
                                <li><i class="fa fa-map-marker pr-10"></i>北京大学28楼221宿舍, 100871</li>
                                <li><i class="fa fa-phone pr-10"></i> +13683553997</li>
                                <li><i class="fa fa-fax pr-10"></i> 13051857787 </li>
                                <li><i class="fa fa-envelope-o pr-10"></i> yanzhangzeng@pku.edu.cn</li>
                            </ul>
                            <ul class="social-links">
                                <li class="facebook"><i class="fa fa-weibo"></i></li>
                                <li class="twitter"><i class="fa fa-weixin"></i></li>
                                <li class="googleplus"><i class="fa fa-renren"></i></li>
                                <li class="skype"><i class="fa fa-qq"></i></li>
                                <li class="linkedin"><i class="fa fa-linkedin"></i></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-content">
                            <img src="/lib2/Public/QD/images/us1.png" width="80%" alt="us" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->
        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Copyright © 2014 Worthy by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>.</p>
                        <p class="text-center">数据库课程作业，闫张增小组~</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->
    </footer>
    <!-- footer end -->
    <!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="/lib2/Public/QD/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="/lib2/Public/QD/bootstrap/js/bootstrap.min.js"></script>
    <!-- Modernizr javascript -->
    <script type="text/javascript" src="/lib2/Public/QD/plugins/modernizr.js"></script>
    <!-- Isotope javascript -->
    <script type="text/javascript" src="/lib2/Public/QD/plugins/isotope/isotope.pkgd.min.js"></script>
    <!-- Backstretch javascript -->
    <script type="text/javascript" src="/lib2/Public/QD/plugins/jquery.backstretch.min.js"></script>
    <!-- Appear javascript -->
    <script type="text/javascript" src="/lib2/Public/QD/plugins/jquery.appear.js"></script>
    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="/lib2/Public/QD/js/template.js"></script>
    <!-- Custom Scripts -->
    <script type="text/javascript" src="/lib2/Public/QD/js/custom.js"></script>
</body>

</html>