<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/newProduct.css" />
    <title>Document</title>
</head>

<body>
    <?php
    require('navbar.php');
    ?>
    <section class="newProductContainer">
        <span class="newProductTitle">새로운 상품 등록</span>
        <div class="newProductPreview">
            <img id="preview" />
        </div>
        <form class="newProductForm">
            <div class="fileBox">
                <input class="upLoadName" value="파일선택" disabled="disabled" />
                <label for="upLoadBtn" class="upLoadButton">업로드</label>
                <input type="file" accept="image/*" id="upLoadBtn" class="upLoadHidden" onchange="readURL(this);" />
            </div>
            <input type="text" class="newProductName" name="newName" placeholder="제품명" required />
            <input type="number" class="newProductPrice" name="newPrice" placeholder="가격" min="0" />
            <input type="text" class="newProductCategory" name="newCategory" placeholder="카테고리" required />
            <input type="text" class="newProductDescription" name="newDescription" placeholder="제품 설명" required />
            <input type="text" class="newProductOption" name="newOption" placeholder="옵션 (콤마( , )로 구분)" required />
        </form>
        <div class="newProductButton">
            <button class="newProductBtn">제품 등록</button>
        </div>
    </section>
    <script src="./js/main.js"></script>
</body>

</html>