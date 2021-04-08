# 上傳圖片範例 CodeIgniter 3.1 版 

## 用到的檔案及所在資料夾
### 資料夾：application/views/files 
1. upload_form.php
  客戶端用來選擇圖片並上傳的 view 程式碼
2. upload_result.php
  上傳圖片成功後導向的結果頁面程式碼，客戶端可透過此 view 查看剛上傳的圖片

### 資料夾：application/controllers
1. ImageUploadController.php
   專門用來處理上傳圖片的 controller 類，裡面有 index 及 store 方法。
   index 用來將 upload_form.php 回傳給客戶端。
   store 則是用來處理上傳到伺服器的圖片並將結果回傳給客戶端。

### 資料夾：application/config
1. routes.php
   用來設定 URL 路由，此處設定了兩個路由
   ##### upload-image 對應到 imageuploadcontroller
   ##### store-image 對應到 imageuploadcontroller/store


### 資料夾： ./
1. htaccess
   伺服器端的設定檔，可設定重導向、URL 重寫、存取控制等等。
   這裡我們將原本在 application 資料夾底下的 htaccess 檔案複製到根目錄，這樣才能在 xampp 程式底下運行，並且將內容改寫，使其能夠將 URL 跟 route 對應。