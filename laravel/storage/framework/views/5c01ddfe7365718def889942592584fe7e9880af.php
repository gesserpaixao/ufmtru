<?php if(is_array($item)): ?>
    <li class="<?php echo e($item['top_nav_class']); ?>">
        <a href="<?php echo e($item['href']); ?>"
           <?php if(isset($item['submenu'])): ?> class="dropdown-toggle" data-toggle="dropdown" <?php endif; ?>
           <?php if(isset($item['target'])): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?>
        >
            <i class="fa fa-fw fa-<?php echo e(isset($item['icon']) ? $item['icon'] : 'circle-o'); ?> <?php echo e(isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''); ?>"></i>
            <?php echo e($item['text']); ?>

            <?php if(isset($item['label'])): ?>
                <span class="label label-<?php echo e(isset($item['label_color']) ? $item['label_color'] : 'primary'); ?>"><?php echo e($item['label']); ?></span>
            <?php elseif(isset($item['submenu'])): ?>
                <span class="caret"></span>
            <?php endif; ?>
        </a>
        <?php if(isset($item['submenu'])): ?>
            <ul class="dropdown-menu" role="menu">
                <?php $__currentLoopData = $item['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(is_string($subitem)): ?>
                        <?php if($subitem == '-'): ?>
                            <li role="separator" class="divider"></li>
                        <?php else: ?>
                            <li class="dropdown-header"><?php echo e($subitem); ?></li>
                        <?php endif; ?>
                    <?php else: ?>
                    <li class="<?php echo e($subitem['top_nav_class']); ?>">
                        <a href="<?php echo e($subitem['href']); ?>">
                            <i class="fa fa-<?php echo e(isset($subitem['icon']) ? $subitem['icon'] : 'circle-o'); ?> <?php echo e(isset($subitem['icon_color']) ? 'text-' . $subitem['icon_color'] : ''); ?>"></i>
                            <?php echo e($subitem['text']); ?>

                            <?php if(isset($subitem['label'])): ?>
                                <span class="label label-<?php echo e(isset($subitem['label_color']) ? $subitem['label_color'] : 'primary'); ?>"><?php echo e($subitem['label']); ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endif; ?>
