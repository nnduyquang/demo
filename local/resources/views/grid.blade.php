<div class="container">
    <hr>
    <h1>Grid Bootstrap 4</h1>
    <h5>col-* Mặc định tất cả viewport đều chia cột cố định (bắt buộc phải có .row)</h5>
    <div class="row">
        <div class="col-4">.col-4</div>
        <div class="col-4">.col-4</div>
        <div class="col-4">.col-4</div>
    </div>
    <hr>
    <br>
    <h5>col-sm-* Chỉ Áp Dụng Cho Viewport >=576px(mobile)</h5>
    <div class="row">
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
    </div>
    <hr>
    <br>
    <h5>col-md-* Chỉ Áp Dụng Cho Viewport >=768px(tablet)</h5>
    <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
    </div>
    <hr>
    <br>
    <h5>col-lg-* Chỉ Áp Dụng Cho Viewport >=992px(desktop)</h5>
    <div class="row">
        <div class="col-lg-4">.col-lg-4</div>
        <div class="col-lg-4">.col-lg-4</div>
        <div class="col-lg-4">.col-lg-4</div>
    </div>
    <hr>
    <br>
    <h5>col-lg-* Chỉ Áp Dụng Cho Viewport >=1200px(extra desktop)</h5>
    <div class="row">
        <div class="col-xl-4">.col-xl-4</div>
        <div class="col-xl-4">.col-xl-4</div>
        <div class="col-xl-4">.col-xl-4</div>
    </div>
    <hr>
    <h5>col Thằng này sẽ chia các column có width bằng nhau tùy thuộc vào số col trong 1 row(mặc định cho tất cả
        viewport)</h5>
    <div class="row">
        <div class="col">1/2 col</div>
        <div class="col">2/2 col</div>
    </div>
    <div class="row">
        <div class="col">1/3 col</div>
        <div class="col">2/3 col</div>
        <div class="col">3/3 col</div>
    </div>
    <div class="row">
        <div class="col">1/4 col</div>
        <div class="col">2/4 col</div>
        <div class="col">3/4 col</div>
        <div class="col">3/4 col</div>
    </div>
    <hr>
    <h5>col Trong trường hợp 1 row có 4 col mà cần cắt xuống hàng thành 2 col trên 2 col dưới thì dùng w-100 chèn
        giữa</h5>
    <div class="row">
        <div class="col">1/4 col</div>
        <div class="col">2/4 col</div>
        <div class="w-100"></div>
        <div class="col">3/4 col</div>
        <div class="col">3/4 col</div>
    </div>
    <hr>
    <h5>Vertical Alignment dùng  align-items-*(*:start||certer||end)</h5>
    <div class="row align-items-start" style="height: 100px; background-color: #00aa88">
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
    </div>
    <br>
    <div class="row align-items-center" style="height: 100px; background-color: #00aa88">
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
    </div>
    <br>
    <div class="row align-items-end" style="height: 100px; background-color: #00aa88">
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
    </div>

</div>