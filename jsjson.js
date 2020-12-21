$(function () {
     $(document).on("click", ".fold-table tr.view", function () {
       $(this).toggleClass("open").next(".fold").toggleClass("open");
     });
     /* Only Button
      $(document).on("click", ".button-detay", function () {
        $(this).parent().parent().toggleClass("open").next(".fold").toggleClass("open");
      });
     */
   
  
     $.get("./orders.json", function (data) {
       if (data) {
         $('.fold-table').pagination({
           dataSource: data.content,
           callback: function (data, pagination) {
             var html = "";
             data.map(function (item) {
               timestamp = new Date(item.orderDate);
               var d = timestamp.getDate().toString();
               var dd = (d.length === 2) ? d : "0"+d;
               var m = (timestamp.getMonth()+1).toString();
               var mm = (m.length === 2) ? m : "0"+m;     
               

               html = html + `
                   <tr class='view'>
                   
                   <td><button class="btn btn-success">Detaylar</button></td>
                     <td>` + item.id + `</td>
                     <td>` + item.customerFirstName + `</td>
                     <td>` + item.customerLastName + `</td>
                     <td>` + dd+"/"+mm+ "/" + (timestamp.getFullYear()).toString() +`</td>
                     <td>` + item.shipmentPackageStatus + `</td>
                     <td>` + item.totalPrice + `</td>
                     <td>`+ item.shipmentAddress.city+`</td> 
                   </tr>
                   <tr class='fold'>
                   <td colspan='12'>
                     <div class='fold-content'>
                       <h3>Tüm Sipariş Detayları</h3>
                       <div class="container">
                       <div class="row">
                           <div class="col-lg-3">
                           <h5>Adres Bilgisi</h5> <hr>
                           `+ item.shipmentAddress.fullName +` <br>
                           `+ item.shipmentAddress.address1 +` 
                           `+ item.shipmentAddress.city +`
                           `+ item.shipmentAddress.district +` - 
                           `+ item.shipmentAddress.countryCode +`
                           </div>

                           <div class="col-lg-5">
                           <h5>Ürün Bilgisi</h5><hr>
                           <strong>Ürün Adı:</strong> `+ item.lines[0].productName +` <br>
                           <strong>Miktar:</strong> `+ item.lines[0].quantity +` <br>
                           <strong>Ürün Boyutu:</strong> `+ item.lines[0].productSize +` <br>
                           <strong>Fiyat:</strong> `+ item.lines[0].price +` <br>
                           </div>

                           <div class="col-lg-4">
                           <h5>Kargo Bilgisi</h5><hr>
                           <strong>Kargo Adı:</strong> `+ item.cargoProviderName +` <br>
                           <strong>Takip Numarası:</strong> `+ item.cargoSenderNumber +` <br>
                           <strong>Takip Linki:</strong> `+ item.cargoTrackingLink +` <br>
                           </div>
                       </div>
                   </div>
                     </div>
                   </td>
                 </tr>
                 `
             })
             $("tbody.crtab").html(html)
           },
         })
   
       }
     })
   });
   