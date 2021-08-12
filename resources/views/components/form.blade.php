<form>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label class="text-light" for="validationDefault01">First name</label>
        <input type="text" class="form-control" id="validationDefault01" value="" required>
      </div>
      <div class="col-md-6 mb-3">
        <label class="text-light" for="validationDefault02">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" value="" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label class="text-light" for="validationDefault03">City</label>
        <input type="text" class="form-control" id="validationDefault03" required>
      </div>
      <div class="col-md-3 mb-3">
        <label class="text-light" for="validationDefault04">State</label>
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label class="text-light" for="validationDefault05">Zip</label>
        <input type="text" class="form-control" id="validationDefault05" required>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input " type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label text-light" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <button class="btn-lg hover-btn" type="submit">Submit form</button>
  </form>
