<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Goals</title>
</head>

<body>
    <h2>Edit Goals</h2>

    <?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message'); ?>
    </div>
    <?php endif; ?>

    <h2>Edit Our Goals</h2>

    <form method="POST" action="/goals/update">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="vision">Our Vision</label>
            <textarea id="vision" name="vision" class="form-control"><?= $goalsData['vision'] ?? ''; ?></textarea>
        </div>

        <div class="form-group">
            <label for="mission">Our Mission</label>
            <textarea id="mission" name="mission" class="form-control"><?= $goalsData['mission'] ?? ''; ?></textarea>
        </div>

        <div class="form-group">
            <label for="key_success_factor">Key Success Factor</label>
            <textarea id="key_success_factor" name="key_success_factor"
                class="form-control"><?= $goalsData['key_success_factor'] ?? ''; ?></textarea>
        </div>

        <div class="form-group">
            <label for="services">Our Services</label>
            <textarea id="services" name="services" class="form-control"><?= $goalsData['services'] ?? ''; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Goals</button>
    </form>


</body>

</html>