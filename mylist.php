﻿<?php include("partials/header.php"); ?>
<div class="main-wrapper">
  <div class="container">
    <div class="row">      
      <div class="addToList">
        <div style="margin: 0 auto">
          <form id="newEntry" class="form-horizontal">
            <div class="row">
            <div class="col-sm-6">
              <label for="inputFirstname">Förnamn</label>
              <input type="text" class="form-control" name="inputFirstname" placeholder="Förnamn">
            </div>
            <div class="col-sm-6">
              <label for="inputLastname">Efternamn</label>
              <input type="text" class="form-control" name="inputLastname" placeholder="Efternamn">
            </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
              <label for="inputAmount">Antal</label>
              <select name="inputAmount" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Är sällskapet över 22?</label>
              <select name="inputAge" class="form-control">
                    <option>Ja</option>
                    <option>Nej</option>
              </select>

            </div>  
            </div>
            <div class="row">
              <div class="col-sm-12">
              <label for="inputComment">Kommentar (valfritt)</label>
              
                <textarea class="form-control" name="inputComment" placeholder="Kommentar" cols="40" rows="5"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <button type="submit" style="margin-top: 15px;" class="btn btn-success">Lägg till</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
      <div class="col-sm-12">
        <h1> Din lista </h1>
        <table class="table your-list"> 
          <thead> 
            <tr> 
              <th>Förnamn</th> 
              <th>Efternamn</th> 
              <th>Antal</th> 
            </tr> 
          </thead> 
          <tbody>
            
          </tbody> 
        </table>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editEntry" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
        <h4 class="modal-title" id="myModalLabel">Uppdatera sällskap</h4>
        </div>
        <div class="modal-body">
          <form id="editEntry" class="form-horizontal">
            <div class="form-group">
              <label for="inputFirstname" class="col-sm-12">Förnamn</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" name="inputFirstname" placeholder="Förnamn">
              </div>
            </div>
            <div class="form-group">
              <label for="inputLastname" class="col-sm-12">Efternamn</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" name="inputLastname" placeholder="Efternamn">
              </div>
            </div>
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
              <label for="inputAmount" class="col-sm-12">Är sällskapet över 22?</label>
              <div class="col-sm-12">
                <select name="inputAge" class="form-control">
                  <option>Ja</option>
                  <option>Nej</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <label for="inputComment">Kommentar (valfritt)</label>
                <textarea class="form-control" name="inputComment" placeholder="Kommentar" cols="40" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="entryID" style="display: none"></input>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Spara</button>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
<?php include("partials/footer.php"); ?>