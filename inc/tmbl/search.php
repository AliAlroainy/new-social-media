<div class="panel panel-default">
        <div class="panel-heading">
         <p>خيارات البحث</p>  
           </div>
           <div class="panel-body">
           <div class="container-fluid">
               <form action="search_s.php" method="post">
               <div class="  col-xs-12 col-sm-12 col-md-6 col-lg-6">
                   <label> الحد الادنى </label>
                  <select name="minAge" class="form-control">
                   <option value="18">18</option>
                   <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                   <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                   </select>
                   
                   <label> الحد الاقصى </label>
                     <select name="maxAge" class="form-control">
                   <option value="18">18</option>
                   <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                   <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                   </select>
                   
                   </div>
                <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <label>المدينة</label>
                  <select name="town" class="form-control">
                    <option value="0"> ... </option>
                    <option value="snaa">صنعاء</option>
                    <option value="ryad">الرياض</option>
                      <option value="cairo">القاهرة</option>
                      <option value="taiz">تعز</option>
                    </select>
                   <label>الحالة الاجتماعية</label>
                  <select class="form-control">
                      <option value="0"> ... </option>
                    <option value="1">متزوج</option>
                    <option value="2">اعزب</option>
                      <option value="3">مرتبط</option>
                      <option value="4">خاطب</option>
                    </select>
                   </div>
                   <div class="col-sm-12"> <br>
                       <button type="submit" class="btn btn-success btn-block"> بحث <i class="fa fa-search" ></i> </button>
                   </div>
               </form>
               
               </div>
           
           </div>
        </div>
