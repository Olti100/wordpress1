<?php get_header(); ?>
  <main>
    <section class="hero">
        <img class="hero-banner"
        src="<?php echo esc_url(get_theme_file_url("images/screenshot.png")); ?>"
        alt="site Banner">
    </section>    

   <section class="features">
    <br>
    <h2 id="heading">WHy choosing us?</h2>
    <br>

    <ul>
        <li>
            <img src="<?php echo esc_url(get_theme_file_url("images/foto1.png")); ?>" 
            alt="Foto1"> 
            <span>Project Based Learning</span>
      </li>    
              <li>
            <img src="<?php echo esc_url(get_theme_file_url("images/foto2.png")); ?>" 
            alt="Foto2"> 
            <span>Instructors who inspire</span>
      </li>  
              <li>
            <img src="<?php echo esc_url(get_theme_file_url("images/foto3.png")); ?>" 
            alt="Foto3"> 
            <span>Future-Ready</span>
      </li>  
              <li>
            <img src="<?php echo esc_url(get_theme_file_url("images/screenshot.png")); ?>" 
            alt="Foto4"> 
            <span>Online or in-person</span>
      </li>   
   </ul>    
</section>
<br>

<section class="section-pad">
    <h2 id="curricula-heading">Curriculum by age</h2>
    <br>

    <ul class="curricula-grid">
        <li class="card">
            <h3 class="card-title">
                <span class="label">Curriculum for the group age</span>
                <span class='age'>8-11</span>
            </h3>
        <ul class='card-points'>
            <li>CONTENT: Learning the logic and basic concepts of programming</li>
            <li>Period: September-July(10 months/Academic Year)</li>
            <li>Intensity: 3 Academic hours per week</li>   
            <li>Group: 8-16 Students</li>
            <li>Method: Online or Physically</li> 
        </ul>
        </li>   
        
        <li class="card">
            <h3 class="card-title">
                <span class="label">Curriculum for the group age</span>
                <span class='age'>12-15</span>
            </h3>
        <ul class='card-points'>
            <li>CONTENT: Learning the logic and basic concepts of programming</li>
            <li>Period: September-July(10 months/Academic Year)</li>
            <li>Intensity: 3 Academic hours per week</li>   
            <li>Group: 8-16 Students</li>
            <li>Method: Online or Physically</li> 
        </ul>
        </li> 

        <li class="card">
            <h3 class="card-title">
                <span class="label">Curriculum for the group age</span>
                <span class='age'>15-18</span>
            </h3>
        <ul class='card-points'>
            <li>CONTENT: Learning the logic and basic concepts of programming</li>
            <li>Period: September-July(10 months/Academic Year)</li>
            <li>Intensity: 3 Academic hours per week</li>   
            <li>Group: 8-16 Students</li>
            <li>Method: Online or Physically</li> 
        </ul>
        </li> 
</ul>
</section>
</main>

<?php get_footer(); ?>