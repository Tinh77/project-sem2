@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <p>Buccellati lấp lánh ươm lên tai với nét mặt rặng ngời<br />
                            Maserati hai cánh ngăn cho em tách biệt đường đời<br />
                            Lướt xuống phố không phanh băng qua nhanh khuôn viên mỗi tối<br />
                            Dinh cơ dăng tay sẵn lối, nơi xa hoa lộng lẫy gọi mời<br />
                            Đố ai bằng em buông dăm ba câu yêu thương bao anh xin chết<br />
                            Ngắm em mà xem đôi chân thon khoe ra đâu ai chịu được nhiệt<br />
                            Ngấm hơn cả men em gieo cơn say nên lâu nay không ai tiếc<br />
                            Hàng đống quà tặng em cho từng đêm đặc biệt<br />
                            Em chỉ cần nếm mùi tiền là quên hết muộn phiền<br />
                            Thế nên anh làm em sao xuyến<br />
                            Một lời em nói trong đêm mang tới mây đen<br />
                            Vùi lấp đi cho em mất tầm nhìn<br />
                            Vậy thì cần gì Nến và Hoa<br />
                            Vì em cũng chỉ đến rồi xa...<br />
                            Vậy thì cần gì Nến và Hoa Khi chính em là một món quà<br />
                            Và ngọn đèn khuya cũng đã tắt từng lời đắm đuối cũng đã mệt<br />
                            Chỉ còn hơi men lay lắt gọi mời hắn tới sát bên em<br />
                            Ôi phong thái này, quần áo này lại ngập đầy mùi giàu sang<br />
                            Cho em đắm say, em ngất ngây và rồi đôi mắt ấy lịm dần<br />
                            Chợt giật mình nhìn quanh khi tỉnh giấc em bị trói chặt không mảnh vải che thân<br />
                            Cố gắng tìm thật nhanh một lối thoát nhưng dường như hơi thở của hắn đã sán đến lại gần<br />
                            Những vết cứa trên da vết tím bầm nói lên điều nhắc nhở về sự thật tàn nhẫn<br />
                            Em bây giờ chỉ còn là chiến lợi phẩm trong một kiếp đời hoang dâm</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
