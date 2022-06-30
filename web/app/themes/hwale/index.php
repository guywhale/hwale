<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <style type="text/css">html{visibility: hidden;opacity:0;}html.hidden{visibility: hidden;opacity:0;}</style>
    <script type="text/javascript">
      document.querySelector('html').classList.add('hidden');
      document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('html').classList.remove('hidden');
      });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
