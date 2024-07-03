    <div>
        <form action="./create" method="POST">
            Product
            <div id="block"></div>
            <input type="text" name="name">
           
            <?php if(isset($errors['string'])) : ?>
                <p id='errorText'><?= $errors['string'] ?></p> 
            <?php endif; ?>
            <div id="block"></div>
            Aantal
            <div id="block"></div>
            <input type="number" name="aantal">
            <?php if(isset($errors['integer'])) : ?>
                
                <p id='errorText'><?= $errors['integer'] ?></p> 
            <?php endif; ?> 
            <div id="block"></div>
            Prijs per stuk
            <div id="block"></div>
            <input type="number" step="0.01" name="stukprijs">
            <?php if(isset($errors['decimal'])) : ?>
                
                <p id='errorText'><?= $errors['decimal'] ?></p> 
            <?php endif; ?> 
            <div id="block"></div>
            <button id="bevestig">Bevestig</button>
        </form>
    </div>