<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/advanced/backend/web/img/avatar3.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->profile->name; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

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

        <?= backend\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [   'label' => Yii::t('user', 'Users'),
                        'items' => [
                            [
                                'label'   => Yii::t('user', 'Show all'),
                                'url'     => ['/user/admin/index'],
                            ],
                            [
                                'label'   => Yii::t('user', 'Roles'),
                                'url'     => ['/rbac/role/index'],
                                'visible' => isset(Yii::$app->extensions['dektrium/yii2-rbac']),
                            ],
                            [
                                'label' => Yii::t('user', 'Permissions'),
                                'url'   => ['/rbac/permission/index'],
                                'visible' => isset(Yii::$app->extensions['dektrium/yii2-rbac']),
                            ],
                            [
                                'label' => Yii::t('user', 'Create'),
                                'items' => [
                                    [
                                        'label'   => Yii::t('user', 'New user'),
                                        'url'     => ['/user/admin/create'],
                                    ],
                                    [
                                        'label' => Yii::t('user', 'New role'),
                                        'url'   => ['/rbac/role/create'],
                                        'visible' => isset(Yii::$app->extensions['dektrium/yii2-rbac']),
                                    ],
                                    [
                                        'label' => Yii::t('user', 'New permission'),
                                        'url'   => ['/rbac/permission/create'],
                                        'visible' => isset(Yii::$app->extensions['dektrium/yii2-rbac']),
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
