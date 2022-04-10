 <h1>新增公佈欄<h1>
  API Url: control\annoucement_add.php <BR>
  API 呼叫方式 : POST <br>
  <table>
     <tr>
        <td>Body 參數</td>
        <td>必填</td>
        <td>說明</td>
     </tr>
     <tr>
        <td>title</td>
        <td>Required</td>
        <td>標題</td>
     </tr>
     <tr>
        <td>annoucement</td>
        <td>Required</td>
        <td>公布內容</td>
     </tr>
  </table>
  Responad:<br>
  ```
  {statue: 0, msg:'成功'}
  ```
<h1>取得公佈欄列表<h1>
API Url: control\get_annoucement.php <BR>
  API 呼叫方式 : POST <br>
  <table>
     <tr>
        <td>Body 參數</td>
        <td>必填</td>
        <td>說明</td>
     </tr>
     <tr>
        <td>page</td>
        <td>Required</td>
        <td>頁面</td>
     </tr>
     <tr>
        <td>length</td>
        <td>Required</td>
        <td>頁面顯示的筆數</td>
     </tr>
  </table>
  Responad:<br>
  ```
 {statue: 0, data: [{id: "2", title: "ssssssssdd", content: "sssddddddddddddddd"},…], count: "12"}
 ```
   <h1>公佈欄列表-刪除功能<h1>
   API Url: control\delete_annoucement.php <BR>
  API 呼叫方式 : POST <br>
  <table>
     <tr>
        <td>Body 參數</td>
        <td>必填</td>
        <td>說明</td>
     </tr>
     <tr>
        <td>id</td>
        <td>Required</td>
        <td>id 流水號</td>
     </tr>
    
  </table>
  Responad:<br>
  ```
  {statue: 0, msg:'成功'}
  ```
<h1>修改公佈欄 - 取得修改頁面資料<h1>
PI Url: control\get_annoucement_info.php <BR>
  API 呼叫方式 : POST <br>
<table>
     <tr>
        <td>Body 參數</td>
        <td>必填</td>
        <td>說明</td>
     </tr>
     <tr>
        <td>id</td>
        <td>Required</td>
        <td>id 流水號</td>
     </tr>
    
  </table>
  Responad:<br>
  ```
  {statue: 0, title:'test' , 'content':'test'}
  ```
  <h1>修改公佈欄<h1>
  API Url: control\annoucement_edit.php <BR>
  API 呼叫方式 : POST <br>
  <table>
     <tr>
        <td>Body 參數</td>
        <td>必填</td>
        <td>說明</td>
     </tr>
      <tr>
        <td>id</td>
        <td>Required</td>
        <td>id 流水號</td>
     </tr>
     <tr>
        <td>title</td>
        <td>Required</td>
        <td>標題</td>
     </tr>
     <tr>
        <td>annoucement</td>
        <td>Required</td>
        <td>公布內容</td>
     </tr>
  </table>
  Responad:<br>
  ```
  {statue: 0, msg:'成功'}
  ```