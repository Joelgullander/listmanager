<?php include("partials/header.php"); ?>
<div class="main-wrapper">
  <div class="container">
    <div class="row">      
      <div class="col-sm-12">
        <h1>Dörrlista</h1>
        
        <input class="search" type="search" name="search" placeholder="Sök" />
        <table class="table door-list">
          <thead> 
            <tr> 
              <th>Förnamn</th> 
              <th>Efternamn</th> 
              <th>Antal</th>
              <th>Ambassadör</th>
              <th>Ålder</th>
            </tr> 
          </thead> 
          <tbody>
            
          </tbody> 
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editEntry" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
        <h4 class="modal-title" id="myModalLabel">Status</h4>
        </div>
        <div class="modal-body">
          <form id="editEntry" class="form-horizontal">
              <div class="form-group">
              <label for="inputAmount" class="col-sm-12">Antal</label>
              <div class="col-sm-12">
                <select name="inputAmount" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <label for="inputComment">Kommentar</label>
                <textarea class="form-control" name="inputComment" placeholder="Kommentar" cols="40" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="entryID" style="display: none"></input>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Godkänn</button>
                <button type="button" id="unapprove" class="btn btn-danger" style="float:right">Neka</button>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
<?php include("partials/footer.php"); ?>