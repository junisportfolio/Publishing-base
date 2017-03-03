<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

    <aside class="side-article">

        <h4 class="side-title">회원 리스트</h4>
        <div class="search-area">
            <div class="form-group">
                <div class="col-sm-4 no_padding">
                    <div class="form-group">
                        <select name="" id="search_type" class="form-control">
                            <option value="0">검색</option>
                            <option value="user_name">이름</option>
                            <option value="user_nickname">닉네임</option>
                            <option value="user_email">이메일</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-8 no_padding">
                    <div class="input-group">
                        <input type="text" id="search_value" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-default">검색</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-member">
            <li>
                <span>김민지</span>
                &nbsp;-
                <span>(별사탕과자)</span>
                <div class="hidden-xs hidden-sm hidden-md flr">
                    <span>tkfktk83@naver.com</span>
                    <span>&nbsp;-&nbsp;</span>
                    <span>(2017-02-28 15:17:51)</span>
                </div>
            </li>
            <li><span>test</span>
                -
                <span>(test)</span>
                <div class="hidden-xs hidden-sm hidden-md flr">
                    <span>test@test.test</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 132 -->(
                        <!-- /react-text --><!-- react-text: 243 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 133 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>제경모</span><!-- react-text: 136 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 138 -->(
                    <!-- /react-text --><!-- react-text: 139 -->ejiwflasjfia<!-- /react-text --><!-- react-text: 140 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>nersia85@korea.com</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 145 -->(
                        <!-- /react-text --><!-- react-text: 244 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 146 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>ㅁㄴㅇㄹ</span><!-- react-text: 149 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 151 -->(
                    <!-- /react-text --><!-- react-text: 152 -->sdfaesgasef<!-- /react-text --><!-- react-text: 153 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>metalot@naver.com</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 158 -->(
                        <!-- /react-text --><!-- react-text: 245 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 159 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>장문호</span><!-- react-text: 162 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 164 -->(
                    <!-- /react-text --><!-- react-text: 165 -->안드<!-- /react-text --><!-- react-text: 166 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>arima4@naver.com</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 171 -->(
                        <!-- /react-text --><!-- react-text: 246 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 172 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>조용준</span><!-- react-text: 175 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 177 -->(
                    <!-- /react-text --><!-- react-text: 178 -->마젠다다<!-- /react-text --><!-- react-text: 179 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>juni84@daum.net</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 184 -->(
                        <!-- /react-text --><!-- react-text: 247 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 185 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>방승기</span><!-- react-text: 188 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 190 -->(
                    <!-- /react-text --><!-- react-text: 191 -->디자인테스트<!-- /react-text --><!-- react-text: 192 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>bang-ga83@hanmail.net</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 197 -->(
                        <!-- /react-text --><!-- react-text: 248 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 198 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>제경모</span><!-- react-text: 201 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 203 -->(
                    <!-- /react-text --><!-- react-text: 204 -->ddfdsfasfd<!-- /react-text --><!-- react-text: 205 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>provement85@gmail.com</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 210 -->(
                        <!-- /react-text --><!-- react-text: 249 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 211 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>김우진</span><!-- react-text: 214 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 216 -->(
                    <!-- /react-text --><!-- react-text: 217 -->화성인<!-- /react-text --><!-- react-text: 218 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>kwj0731@gmail.com</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 223 -->(
                        <!-- /react-text --><!-- react-text: 250 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 224 -->)<!-- /react-text --></span></div>
            </li>
            <li><span>정희석</span><!-- react-text: 227 -->&nbsp;-&nbsp;<!-- /react-text --><span><!-- react-text: 229 -->(
                    <!-- /react-text --><!-- react-text: 230 -->해괴망측<!-- /react-text --><!-- react-text: 231 -->)
                    <!-- /react-text --></span>
                <div class="hidden-xs hidden-sm hidden-md flr"><span>s20k@naver.com</span><span>&nbsp;-&nbsp;</span><span><!-- react-text: 236 -->(
                        <!-- /react-text --><!-- react-text: 251 -->2017-02-28 15:17:51<!-- /react-text -->
                        <!-- react-text: 237 -->)<!-- /react-text --></span></div>
            </li>
        </ul>
        <div class="center-block">
            <ul class="pagination">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
        </div>

    </aside>
    <article class="main-article">

        <h4 class="content-title">
            김민지
            <span class="small">
                님의 상세정보 입니다.
            </span>
        </h4>

        <div class="data_content">
            <table class="table-view">
                <colgroup>
                    <col width="100">
                    <col width="*">
                </colgroup>
                <tbody>
                <tr>
                    <th>이름</th>
                    <td>김민지</td>
                </tr>
                <tr>
                    <th>닉네임</th>
                    <td>별사탕과자</td>
                </tr>
                <tr>
                    <th>성별</th>
                    <td>여성</td>
                </tr>
                <tr>
                    <th>유저 등급</th>
                    <td><!-- react-text: 45 -->회원<!-- /react-text -->
                        <hr>
                        <div class="input-group"><select id="user_level_changer" name="user_level_changer"
                                                         class="form-control">
                                <option value="0">등급 변경</option>
                                <option value="2">관리자</option>
                                <option value="3">부관리자</option>
                                <option value="4">아르바이트</option>
                                <option value="9">회원</option>
                            </select>
                            <div class="input-group-btn">
                                <button class="btn btn-default">변경</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>생년월일</th>
                    <td>19831112</td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td>tkfktk83@naver.com</td>
                </tr>
                <tr>
                    <th>보유코인</th>
                    <td><p>11</p>
                        <hr>
                        <div class="input-group"><input type="number" id="give_coin" name="give_coin" placeholder="꿀 지급"
                                                        class="form-control"><input type="number" id="give_coin_free"
                                                                                    name="give_coin_free"
                                                                                    placeholder="무료 꿀 지급"
                                                                                    class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-default custom-btn-height">지급</button>
                            </div>
                        </div>
                        <div class="input-group"><input type="number" id="exchange_coin" name="exchange_coin"
                                                        placeholder="꿀 환전" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-default">환전</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>포인트</th>
                    <td>1</td>
                </tr>
                <tr>
                    <th>계정 생성일</th>
                    <td>2017-02-28 15:17:51</td>
                </tr>
                <tr>
                    <th>최근 로그아웃</th>
                    <td>2017-02-28 17:56:20</td>
                </tr>
                <tr>
                    <th>가입방식</th>
                    <td>이메일 가입</td>
                </tr>
                <tr>
                    <th>유저 상태</th>
                    <td>정상</td>
                </tr>
                <tr>
                    <th>계좌인증</th>
                    <td>미인증</td>
                </tr>
                <tr>
                    <th>신분증인증</th>
                    <td>미인증</td>
                </tr>
                <tr>
                    <th>BJ 등록</th>
                    <td>
                        <div class="input-group"><select id="bj_registration" name="bj_registration"
                                                         class="form-control">
                                <option value="0">커뮤니티</option>
                                <option value="game">게임</option>
                                <option value="talk">토크</option>
                                <option value="indimusic">인디뮤직</option>
                            </select>
                            <div class="input-group-btn">
                                <button class="btn btn-default">등록</button>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


    </article>


<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>