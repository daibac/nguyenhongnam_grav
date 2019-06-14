---
title: 'Hướng dẫn'
media_order: 'categories.png,categories-code.png,footer.png,footer-code.png,portfolio.png,portfolio-code.png,slider.png,slider-img.png,about.png,about-code.png,gallery.png,gallery-code.png'
---

# Hướng dẫn thêm sửa xóa
## 1. Trang Home
#### A. PhầnSlider
![](slider.png)<br>
Bước 1: Chuẩn bị hình ảnh thay thế.<br>
Bước 2: Vào đường dẫn  **Tên-web-site\user\pages\01.home\_slider**<br>
Bước 3: Thay thế bằng hình ảnh muốn hiển thị.<br>
![](slider-img.png)<br>
Thay đổi tên và thứ tự hiển thị **_picture1_** đến **_picture4_**<br><br><br>


#### B. Phần thể loại(categories)<br>
![](categories.png)<br>
Bước 1: Chuẩn bị hình ảnh thay thế.<br>
Bước 2: Vào đường dẫn **Tên-web-site\user\pages\01.home\_categories**<br>
Bước 3: Thay thế bằng hình ảnh muốn hiển thị.<br>
Mở file categories.md<br>
![](categories-code.png)<br>
        - image:**_ thay bằng tên ảnh mới mà bạn cần._<br>**
          class:**_ không được thay đổi _**<br>
          href: **_ không được thay đổi_**<br>
          title: **_ Thay tên tiêu đề bạn muốn hiển thị_**<br>
          title_position:  **_Nhận 2 giá trị top / botom) _**  <br><br><br>
          
          
#### C. Phần chân trang( footer)<br>
![](footer.png)<br>
Bước 1: Chuẩn bị hình ảnh thay thế.<br>
Bước 2: Vào đường dẫn **Tên-web-site\user\pages\01.home\_footer**<br>
Bước 3: Thay thế bằng hình ảnh/ nội dung muốn hiển thị.<br>
Mở file footer.md<br>
![](footer-code.png)<br>
              title: **_ Tiêu đề _<br>**
              title2: **_ Nghề nghiệp _<br>**
              image: **_  link ảnh _<br>**
              text:	**_ slogan của bạn _<br>**
              readme_url:  **_ Không được thay đổi _<br>**
              readme_text:  **_(Không được thay đổi  _<br>**
        locations:<br>
              title:  **_  Tiêu đề _<br>**
              text:  **_  Thay địa chỉ mới vào đây _**<br><br><br>
              
              
####  D. Phần danh mục ( portfolio)<br>
![](portfolio.png)<br>
Bước 1: Chuẩn bị hình ảnh thay thế.<br>
Bước 2: Vào đường dẫn **Tên-web-site\user\pages\01.home\_portfolio**<br>
Bước 3: Thay thế bằng hình ảnh/ nội dung muốn hiển thị.<br>
Mở file portfolio.md<br>
![](portfolio-code.png)<br>
            - image:**_  link ảnh _<br>**
              class:** _  Không được thay đổi _<br>**
              title1: **_ Thay tên tiêu đề bạn muốn hiển thị _<br>**
              title2: **_Thay tên tiêu đề bạn muốn hiển thị _<br>**
              title3: **_Thay tên nội dung bạn muốn hiển thị _<br>**
              linkurl: 	**_ link mở trang _<br>**
              linktext: **_ Tên link _<br><br><br>**


## 2. Trang Abount me<br>
![](about.png)<br>
Bước 1: Chuẩn bị hình ảnh thay thế.<br>
Bước 2: Vào đường dẫn **Tên-web-site\user\pages\02.about\about**<br>
Bước 3: Thay thế bằng hình ảnh/ nội dung muốn hiển thị.<br>
Mở file about.md<br>
![](about-code.png)<br>
                title: **_  Không nên thay đổi _<br>**
                media_order: **_  link ảnh _<br>**
                menu: **_  Không nên thay đổi _<br>**
                onpage_menu: true<br>
                work:<br>
                    title: **_ Thay tên tiêu đề bạn muốn hiển thị _<br>**
                    description: **_ Thay tên bạn muốn hiển thị _<br>**
                    hiretitle:  ' '<br>
                ---<br>
            ![  Tên Ảnh  ](  _Link Ảnh_  ) <br><br><br>


## 4. Trang Gallery
 ![](gallery.png)<br>
Bước 1: Chuẩn bị hình ảnh thay thế.<br>
Bước 2: Vào đường dẫn **Tên-web-site\user\pages\03.galleryt\gallery**<br>
Bước 3: Thay thế bằng hình ảnh/ nội dung muốn hiển thị.<br>
Mở file gallery.md<br>
![](gallery-code.png)<br>
                    ---<br>
                    title: **_Không thay đổi_<br>**
                    menu: **_Không thay đổi_<br>**
                    onpage_menu: true :**_Không thay đổi_<br>**
                    filters: <br>
                        -<br>
                            key:   **_Key  album  _<br>**
                            name:  **_Tên album_<br>**
                     gallery:<br>
                        -<br>
                            filter:  **_Key album_<br>**
                            image:   **_ Link ảnh_<br>**
                            description:   **_ Nội dung ảnh_<br>**