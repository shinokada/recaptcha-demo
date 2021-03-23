<div class='container'>
    <div class="logout">
    <a href='logout.php'>LOG OUT</a>
    </div>
    <div class="conthead">
        <h1>Welcome to reCAPTCHA demo</h1>
        <h2>Click on image to download the PDF file.</h2>
    </div>
    <div class="gallery">
        <?php 
        $downloads="downloads";
        $pngs=glob($downloads.'/*.png');
        
        foreach ($pngs as $png){
            $filename= pathinfo($png, PATHINFO_FILENAME);
            $pdf=$downloads.'/'.$filename.'.pdf';
            echo '<a href="'.$pdf.'" download><img src="'.$png.'" data-pin-nopin="true"></a>';
        }
        ?>
    </div>
</div>