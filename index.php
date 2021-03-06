<html>
<head>
<title>สรุปการติดต่อราชการด้วย QR Code ของศาลจังหวัดหล่มสัก</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="card-title"><i class="fa fa-file-text-o mr-2"></i>สรุปการติดต่อราชการด้วย QR Code ของศาลจังหวัดหล่มสัก</h3>
                </div>
                <div class="card-body" id="div_table">
                </div>
            </div>
        </div>
    </div>
    </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
   
// data
const data = [
        {
            num: 1,
            name: "การแจ้งความประสงค์ล่วงหน้า เพื่อขอประกันตัวผู้ต้องหาหรือจำเลย",
            url: "",
            api: "https://api.sheety.co/b5f4b046-27c3-46ea-a2f2-7d0948b9b457"
        },
        {
            num: 2,
            name: "ขอทราบวันนัดเป็นพยานศาลจังหวัดหล่มสัก",
            url: "",
            api: "https://api.sheety.co/1b893c19-c5b1-478e-959b-1505412f2975"
        },
        {
            num: 3,
            name: "การแจ้งความประสงค์ล่วงหน้า เรื่องขอถอนและรับหลักประกันคืน (งาน ปชส.) ",
            url: "",
            api: "https://api.sheety.co/c646717f-f55d-4da5-a212-4a404e043aae"
        },
        {
            num: 4,
            name: "ขอทราบผลคำพิพากษา หรือ วันที่จะดำเนินการจัดพิมพ์คำพิพากษาแล้วเสร็จ ",
            url: "",
            api: "https://api.sheety.co/8a5090b9-01d9-4102-8e7a-4c18c03ab6d6"
        },
        {
            num: 5,
            name: "ขอทราบวันนัดพิจารณาคดี ",
            url: "",
            api: "https://api.sheety.co/62f561eb-fb66-4b5d-826b-3a2572d454ae"
        },
        {
            num: 6,
            name: "แบบแจ้งความประสงค์ขอปล่อยชั่วคราวผู้ต้องหาหรือจำเลยด้วยอุปกรณ์อิเล็กทรอนิกส์ (งาน ปชส.) ",
            url: "",
            api: "https://api.sheety.co/38a85993-bf01-4307-b454-245fdb95fd6c"
        },
        {
            num: 7,
            name: "ติดต่อเพื่อขอให้จัดทำคำร้อง คำขอ คำแถลง งาน ปชส",
            url: "",
            api: "https://api.sheety.co/631532ea-c618-4132-b818-ad4077b1bf84"
        },
        {
            num: 8,
            name: "ติดต่อสอบถามเรื่องทั่วไป (งาน ปชส.) ",
            url: "",
            api: "https://api.sheety.co/488b0b1f-d224-4082-9677-c22679deb0d1"
        },
		{
		    num: 9,
            name: "แบบขอใช้บริการล่วงหน้างานบริหารจัดการคดี" ,
            url: "",
            api: "https://api.sheety.co/6554306c-6dfb-447f-9da6-a06303e01a43"
        },
        {
            num: 10,
            name: "ขอใช้บริการล่วงหน้า - งานคลัง ",
            url: "",
            api: "https://api.sheety.co/43b5fd62-e487-44df-93ed-93a3319128d0"
        },
        {
            num: 11,
            name: "ขอใช้บริการล่วงหน้า - (งานช่วยอำนวยการ) ",
            url: "",
            api: "https://api.sheety.co/276f6a8b-3d5d-4a3f-badb-28a7ca8fd882"
        },
        {
            num: 12,
            name: "แบบขอกำหนดวันยื่นฟ้องคดีและจองวันนัดพิจารณา ",
            url: "",
            api: "https://api.sheety.co/6a366dda-3320-4bd8-b0db-d4e81be9489a"
        },
        {
            num: 13,
            name: "แบบขอใช้บริการล่วงหน้ากลุ่มงานบริหารจัดการคดี (ขอคัดถ่าย / ตรวจสำนวน)",
            url: "",
            api: "https://api.sheety.co/31c0d4c3-1495-4080-93d1-a6234cb470be"
        },
        {
            num: 14,
            name: "แบบยื่นคำร้อง /คำแถลง / คำขอ ผ่านระบบการขอใช้บริการล่วงหน้า ",
            url: "",
            api: "https://api.sheety.co/ff24ba38-211e-40df-a772-20b5105fb9f4"
        },
		 {
            num: 15,
            name: "แบบแจ้งปัญหาข้อขัดข้อง ข้อเสนอแนะ ในการติดต่อราชการศาลจังหวัดหล่มสัก ",
            url: "",
            api: "https://api.sheety.co/d67a559e-536e-4c1a-80d8-e20fb28c4012"
        },
		{
            num: 16,
            name: "แบบตอบรับการมาปฏิบัติหน้าที่ล่าม ศาลจังหวัดหล่มสัก ",
            url: "",
            api: "https://api.sheety.co/6ae7c9ab-1a6d-485b-8442-a3283337326e"
        },
	   {
            num: 17,
            name: "แบบตอบรับการมาเป็นทนายขอแรง ของศาลจังหวัดหล่มสัก ",
            url: "",
            api: "https://api.sheety.co/df7059a1-cff5-48b7-98d5-80fccd001048"
        },
		    
    ];

// display table
function displayTable(){
    var html = "";
    html = `<table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class='text-center'>_</th>
                        <th class='text-center'>เรื่อง</th>
                        <th class='text-center'>จำนวน</th>
                    </tr>
                </thead>
                <tbody>`;
    // body
    data.forEach(function(item){
        html += `<tr>
        <td class='text-center'>${item.num}</td>
        <td>${item.name}</td>
        <td id="count_${item.num}" class='text-center'>
            <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
            <span class="sr-only">Loading...</span></td>
        </tr>`;
    })

    // close
    html += `</tbody></table>`;

    $('#div_table').html(html);

    // render count
    var date = new Date();
    var today = `${date.getDate()}/${date.getMonth()+1}/${date.getFullYear()}`;
    data.forEach(function(item){
        $.getJSON(item.api, function(_data){
            let count = _data.length;
            // console.log(_data);
            const rs = _data.filter(d => {
                if(d['timestamp']!=undefined){
                    return d['timestamp'].includes(today);
                }else if(d['ประทับเวลา']!=undefined){
                    return d['ประทับเวลา'].includes(today);
                }
                return false;
            } );
            const new_count = rs.length;
            // console.log(new_count);
            if(new_count > 0){
                count += ` <badge class='badge badge-danger'>NEW(${new_count})</badge>`
            }

            $(`#count_${item.num}`).html(count);
        })
    })
}

$(function(){
    // display
    displayTable();
})
</script>
</body>
</html>