<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
            
        <div class="slide slide1">
            <div class="slide-row1">
                <h1>Gillar du rymden?</h1>
                <p>Det gör vi också! Astronomisk Ungdom samlar alla Sveriges unga rymdintresserade i en gemenskap.</p>
                <button>Bli medlem</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p class="active" onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide2">
            <div class="slide-row1">
                <h1>Delta i våra aktiviteter</h1>
                <p>Vi driver astronomiläger, sommarforskarskola, poddradio, forum, bloggportal och mycket annat.</p>
                <button>Se våra verksamheter</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p class="active" onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide3">
            <div class="slide-row1">
                <h1>Ett förbund av föreningar</h1>
                <p>AU är ett ungdomsförbund uppbyggt av medlemsföreningar inom olika områden.</p>
                <button>Se våra medlemsföreningar</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p class="active" onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide4">
            <div class="slide-row1">
                <h1>Engagera dig</h1>
                <p>Astronomisk Ungdom drivs av ideellt engagemang hos medlemmarna. Bli aktiv du också.</p>
                <button>Bli aktiv</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p class="active" onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide5">
            <div class="slide-row1">
                <h1>Bli en del av AU</h1>
                <p>Delta i våra aktiviteter, lär dig mer om rymden och träffa likasinnade från hela Sverige. Helt gratis.</p>
                <button>Bli medlem nu</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p class="active" onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="section">
            <h2>Rubrik här</h2>
            
            <p>Välkommen! Om du är medlem i en miljöförening vart som helst i Sverige kan du anmäla din förening att bli del av forumet Miljöungdom här. Som en medlem får du ta del av startpaket, organiserade utflykter, kontakter och mer.
                
            <br><br>
                
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        
        <!-- JavaScript -->
        <script type="text/javascript" src="js/script.js"></script>
        
    <?php include 'includes/footer.php'; ?>
</html>