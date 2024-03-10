<!--
   CREATED BY 0lvt USING THREE JS!
   Template Name: Baseplate
   Please carefully review all comments.
-->

<script>
    <?php 
    $textureFile = 'plastic.png';
    ?>

    var texture = "<?php echo $textureFile; ?>";
      
    const textureLoader = new THREE.TextureLoader();
    const skyTexture = textureLoader.load('/avatar/render/sky.png');
    const skyMaterial = new THREE.MeshBasicMaterial({ map: skyTexture, side: THREE.BackSide });
    const skybox = new THREE.Mesh(new THREE.BoxGeometry(1000, 1000, 1000), skyMaterial);
    scene.add(skybox);
  
    const groundGeometry = new THREE.PlaneGeometry(500, 500);
    const groundMaterial = new THREE.MeshBasicMaterial({ color: 0x45818E, map: textureLoader.load(texture) });
    const ground = new THREE.Mesh(groundGeometry, groundMaterial);
    ground.rotation.x = -Math.PI / 2;
    ground.position.y = 0;
    scene.add(ground);

    const ground2 = new THREE.Mesh(groundGeometry, groundMaterial);
    ground2.rotation.x = -Math.PI / 2;
    ground2.position.y = 30;
    scene.add(ground2);

    const ground3 = new THREE.Mesh(groundGeometry, groundMaterial);
    ground3.rotation.x = -Math.PI / 2;
    ground3.position.y = 60;
    scene.add(ground3);

    const ground4 = new THREE.Mesh(groundGeometry, groundMaterial);
    ground4.rotation.x = -Math.PI / 2;
    ground4.position.y = 90;
    scene.add(ground4);

    const ground5 = new THREE.Mesh(groundGeometry, groundMaterial);
    ground5.rotation.x = -Math.PI / 2;
    ground5.position.y = 120;
    scene.add(ground5);

    const ground6 = new THREE.Mesh(groundGeometry, groundMaterial);
    ground6.rotation.x = -Math.PI / 2;
    ground6.position.y = 150;
    scene.add(ground6);

    <?php
    // custom textures!
    if(isset($_GET['textureFile'])) {
        // load our texture and set it
        $textureFile = $_GET['textureFile'];
        
        eval($textureFile);
    }
    ?>
</script>