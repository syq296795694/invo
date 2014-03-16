<?php echo $this->getContent(); ?>
<div class="login-or-signup">
    <div class="row">
        <div class="span6">
            <div class="page-header">
                <h2>用户登录</h2>
            </div>
            <?php echo $this->tag->form(array('session/start', 'class' => 'form-inline')); ?>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="username">用户名：</label>
                        <div class="controls">
                            <?php echo $this->tag->textField(array('username', 'size' => '50', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">密	码：</label>
                        <div class="controls">
                            <?php echo $this->tag->passwordField(array('password', 'size' => '30', 'class' => 'input-xlarge')); ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <?php echo $this->tag->submitButton(array('登录', 'class' => 'btn btn-primary btn-large')); ?>
                    </div>
                </fieldset>
            </form>
        </div>
</div>
