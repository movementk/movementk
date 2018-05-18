<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="sub request">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content" class="request-write">
        <div class="backdrop"></div>
        <article class="write-form">
           <div class="page-header">
                <div class="container-fluid">
                    <h2>Request</h2>
                    <p>
                        MovementK Group만의 열정과 패기, <br> 수준높은 업무프로세스를 통해 성공적인 프로젝트를<br class="d-md-none"> 만들어가겠습니다.
                    </p>
                </div>
            </div>
            <div class="write">
                <div class="container-fluid">
                    <form action="#">
                        <h3>고객정보</h3>
                        <div class="table-wrap">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="essential"><label for="u-compay">회사명</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-compay" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-homepage">홈페이지</label></th>
                                        <td class="homepage">
                                            <div class="form-group">
                                                <input type="text" id="u-homepage" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="responsibility">담장자명/직책</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="responsibility" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="u-contact">연락처</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-contact" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="u-mail">E-mail</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="email" id="u-mail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <h3>상세정보</h3>
                        <div class="table-wrap">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="essential">프로젝트 유형</th>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    신규 제작문의
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">리뉴얼 문의</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-budget">프로젝트 예산</label></th>
                                        <td class="budget">
                                            <div class="form-group">
                                                <input type="text" id="u-budget" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="reference">참고사이트</label></th>
                                        <td class="reference">
                                            <div class="form-group">
                                                <input type="text" id="reference" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential v-top"><label for="inquiry">프로젝트문의</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="inquiry" class="form-control" placeholder="프로젝트 문의 내용을 입력해 주세요"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="attach">파일 업로드</label></th>
                                        <td class="file">
                                            <div class="form-group">
                                                <input type="file" id="attach" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-send">
                                    <i>Send</i>
                                    <span></span>
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/pageheader.js"></script>
    <script>
        $(function(){
            // portfolio 관련
            $("#attach").attr('title',' ');
            $(window).on('scroll load', function() {
                setInterval(function(){
                    $('.write').each(function(index, elem) {
                        if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                            $(elem).addClass('on');
                        }
                    });
                }, 2000);
            });
        });
    </script>
</body>
</html>