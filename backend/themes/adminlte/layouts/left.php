<aside class="main-sidebar">

    <section class="sidebar">

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                     ['label' => 'บุคลากร', 'icon' => 'fa fa-user', 'url' => ['/']],
                	['label' => 'บทบาท', 'icon' => 'fa fa-user-secret', 'url' => ['/']],
                	['label' => 'สิทธฺิ์', 'icon' => 'fa fa-lock', 'url' => ['/']],
                	['label' => 'ตั้งค่า', 'icon' => 'fa fa-cog', 'url' => ['/']],
                	['label' => 'ประเภทโครงการ', 'icon' => 'fa fa-bookmark', 'url' => ['/']],
                	['label' => 'ปฏิทิน', 'icon' => 'fa fa-calendar', 'url' => ['/']],
                	['label' => 'ทีม', 'icon' => 'fa fa-users', 'url' => ['/']],
                	['label' => 'โครงการ', 'icon' => 'fa fa-file', 'url' => ['/project']],
                	['label' => 'งาน', 'icon' => 'fa fa-tasks', 'url' => ['/task']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
