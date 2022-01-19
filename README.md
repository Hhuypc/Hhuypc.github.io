<div class="main">
        <ul class="category">
            <li data-name="sort-canam" class="selected"><a href="?type=sort-canam">Xếp loại học sinh</a></li>
            <li data-name="hocky"><a href="?type=hocky">Trung bình môn học kỳ </a></li>
            <li data-name="canam"><a href="?type=canam">Trung bình môn học cả năm </a></li>
        </ul>
        <div class="header">Xếp loại học sinh cả năm</div>
        <div class="sort-canam">
            <select class="class-selected">
                <option value="">Chọn lớp</option>
                <option value="lop67">Lớp 6-7</option>
                <option value="lop89">Lớp 8-9</option>
                <option value="lop1012">Lớp 10-12</option>
            </select>
            <div class="subject hide-box">
                <input id="txtToan" type="number" placeholder="Toán">
                <input id="txtVan" type="number" placeholder="Văn">
                <input id="txtVatly" type="number" placeholder="Vật lý">
                <input id="txtTiengAnh" type="number" placeholder="Tiếng anh">
                <input id="txtGDCD" type="number" placeholder="Giáo dục công dân">
                <input id="txtCongNghe" type="number" placeholder="Công nghệ">
                <input id="txtLichSu" type="number" placeholder="Lịch sử">
                <input id="txtDialy" type="number" placeholder="Địa lý">
                <input id="txtSinhHoc" type="number" placeholder="Sinh học">
                <input id="txtHoaHoc" type="number" placeholder="Hóa học">
                <input id="txtTinHoc" type="number" placeholder="Tin học">
            </div>
            <button id="btn-sort-canam" class="btnrs hide-box">Xem kết quả</button>
            <div class="rs-sort-canam rs hide-box">
                <div class="dtb"></div>
                <div class="sort"></div>
            </div>
        </div>
        <div class="hocky list hide-box">
            <ul>
                <li>
                    <label>Tổng điểm kiểm tra 15p / điểm miệng</label>
                    <div><input id="pointHK" type="number" placeholder="Ví dụ: (8 + 7 + 9) => 24"></div>
                </li>
                <li>
                    <label>Điểm kiểm tra giữa kỳ</label>
                    <div><input id="pointGK" type="number" placeholder="0"></div>
                </li>
                <li>
                    <label>Điểm kiểm tra cuối kỳ</label>
                    <div><input id="pointCK" type="number" placeholder="0"></div>
                </li>
                <li>
                    <label>Tổng số lần tham gia kiểm tra 15p / điểm miệng</label>
                    <div><input id="countHk" type="number" placeholder="Ví dụ: 3 lần => 3"></div>
                </li>
            </ul>
            <button id="btn-hocky" class="btnrs">Xem kết quả</button>
            <div class="rs-hocky rs hide-box">
                <div class="sort"></div>
            </div>
        </div>
        <div class="canam hide-box list">
            <ul>
                <li>
                    <label>Trung bình điểm kỳ 1</label>
                    <div><input id="tb1" type="number" placeholder="0"></div>
                </li>
                <li>
                    <label>Trung bình điểm kỳ 2</label>
                    <div><input id="tb2" type="number" placeholder="0"></div>
                </li>
            </ul>
            <button id="btn-canam" class="btnrs">Xem kết quả</button>
            <div class="rs-canam rs hide-box">
                <div class="sort"></div>
            </div>
        </div>
        
        
    </div>
