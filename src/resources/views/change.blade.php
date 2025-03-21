<div class="register-form__group">
                <label class="register-form__label" for="price">
                値段<span
                class="register-form__required">必須
                </span>
                </label>
          <input class="register-form__input" type="text" name="price" id="price"
            value="{{ old('price') }}" placeholder="値段を入力">
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="photo">
                商品画像<span
                class="register-form__required">必須
                </span>
                </label>
            <class="register-form__select-inner">
          <select class="register-form__select" name="category_id" id="">
            <option disabled selected>ファイルを選択</option>
            </select>
            </div>
        <div class="register-form__group">
        <label class="register-form__label">
          季節<span class="register-form__required">必須</span>
        </label>
        <div class="register-form__season-inputs">
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" name="season" type="radio" id="male" value="1" {{
                old('gender')==1 || old('gender')==null ? 'checked' : '' }}>
              <span class="register-form__season-text">男性</span>
            </label>
          </div>






          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="summer" value="2" {{
                old('gender')==2 ? 'checked' : '' }}>
              <span class="contact-form__gender-text">夏</span>
            </label>
          </div>
<div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="fall" value="3" {{
                old('gender')==3 ? 'checked' : '' }}>
              <span class="contact-form__gender-text">秋</span>
            </label>
          </div>
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="winter" value="4" {{
                old('gender')==4 ? 'checked' : '' }}>
              <span class="contact-form__gender-text">冬</span>
            </label>
          </div>