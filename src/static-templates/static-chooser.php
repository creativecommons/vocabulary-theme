<?php get_header('', array( 'body-classes' => 'chooser-page') ); ?>

<main>

<header>

<h1><?php echo __( 'Choose a License for Your Work', 'vocabulary-theme' ); ?></h1>

<div>
<p><?php echo __( 'Follow the steps to select the appropriate license for your work.', 'vocabulary-theme' ); ?></p>
<p><?php echo __( 'This site does not store any information.', 'vocabulary-theme' ); ?></p>
</div>

</header>


<div class="content">

    <form id="chooser">

    <ol>

    <li>
    <fieldset id="do-you-know-which-license-you-need">
        <legend><?php echo __( 'Do you know which license you need?', 'vocabulary-theme' ); ?></legend>
        <!-- <legend>Choose a License</legend> -->


        <div>
            <input type="radio" id="yes-choose" name="choose" value="yes" checked />
            <label for="yes-choose"><?php echo __( 'Yes', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="radio" id="no-choose" name="choose" value="no" />
            <label for="no-choose"><?php echo __( 'No', 'vocabulary-theme' ); ?></label>
        </div>
    <!--
        <div>
            <input type="radio" id="choose" name="choose" value="choose" />
            <label for="choose">Choose</label>
        </div>

        <div>
            <input type="radio" id="help" name="help" value="help" />
            <label for="help">Help me choose</label>
        </div> -->
    </fieldset>
    </li>

    <li>
    <fieldset id="which-license-do-you-need">
        <!-- <legend>Choose a License</legend> -->
        <legend><?php echo __( 'Which license do you need?', 'vocabulary-theme' ); ?></legend>

        <label for="tool"><?php echo __( 'License', 'vocabulary-theme' ); ?></label>
        <select name="tool" id="tool">
            <option value="noselect" selected>&mdash;<?php echo __( 'choose a license', 'vocabulary-theme' ); ?>&mdash;</option>
            <option value="cc-0">CC0 1.0</option>
            <option value="cc-by">CC-BY 4.0</option>
            <option value="cc-by-sa">CC-BY-SA 4.0</option>
            <option value="cc-by-nd">CC-BY-ND 4.0</option>
            <option value="cc-by-nc">CC-BY-NC 4.0</option>
            <option value="cc-by-nc-sa">CC-BY-NC-SA 4.0</option>
            <option value="cc-by-nc-nd">CC-BY-NC-ND 4.0</option>
        </select>

        <!-- <p>OR</p>

        <div></div>
            <input type="checkbox" id="help" name="help" value="help" />
            <label for="help">Help me choose</label>
        </div> -->

    </fieldset>
    </li>

    <li>
    <fieldset id="require-attribution">
        <legend><?php echo __( 'Require attribution for your work?', 'vocabulary-theme' ); ?></legend>

        <div>
            <input type="radio" id="yes-attribution" name="attribution" value="yes" />
            <label for="yes-attribution"><?php echo __( 'Yes', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="radio" id="no-attribution" name="attribution" value="no" />
            <label for="no-attribution"><?php echo __( 'No', 'vocabulary-theme' ); ?></label>
        </div>

    </fieldset>
    </li>


    <li>
    <fieldset id="allow-commercial-use">
        <legend><?php echo __( 'Allow others to use your work commercially?', 'vocabulary-theme' ); ?></legend>

        <div>
            <input type="radio" id="yes-commercial" name="commercial" value="yes" />
            <label for="yes-commercial"><?php echo __( 'Yes', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="radio" id="no-commercial" name="commercial" value="no" />
            <label for="no-commercial"><?php echo __( 'No', 'vocabulary-theme' ); ?></label>
        </div>

    </fieldset>
    </li>

    <li>
    <fieldset id="allow-derivatives">
        <legend><?php echo __( 'Allow others to remix, adapt, or build upon your work?', 'vocabulary-theme' ); ?></legend>

        <div>
            <input type="radio" id="yes-derivatives" name="derivatives" value="yes" />
            <label for="yes-derivatives"><?php echo __( 'Yes', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="radio" id="no-derivatives" name="derivatives" value="no" />
            <label for="no-derivatives"><?php echo __( 'No', 'vocabulary-theme' ); ?></label>
        </div>

    </fieldset>
    </li>

    <li>
    <fieldset id="share-alike">
        <legend><?php echo __( 'Require adaptions of your work to be licensed under the same CC license?', 'vocabulary-theme' ); ?></legend>

        <div>
            <input type="radio" id="yes-sharing-requirements" name="sharing-requirements" value="yes" />
            <label for="yes-sharing-requirements"><?php echo __( 'Yes', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="radio" id="no-sharing-requirements" name="sharing-requirements" value="no" />
            <label for="no-sharing-requirements"><?php echo __( 'No', 'vocabulary-theme' ); ?></label>
        </div>

    </fieldset>
    </li>

    <!-- <hr /> -->

    <li>
    <fieldset id="waive-your-copyright">
        <legend><?php echo __( 'Waive your copyright', 'vocabulary-theme' ); ?></legend>
        <!-- [T]: needs another box here to verify ownership similar to "confirmation" -->

        <div>
            <input type="checkbox" id="waive" name="waive" value="waive" />
            <label for="waive"><?php echo __( 'I hereby waive all copyright and related or neighboring rights together with all associated claims and causes of action with respect to this work to the extent possible under the law.', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="checkbox" id="read" name="read" value="read" />
            <label for="read"><?php echo __( 'I have read and understand the terms and intended legal effect of CC0, and hereby voluntarily elect to apply it to this work.', 'vocabulary-theme' ); ?></label>
        </div>

    </fieldset>
    </li>

    <li>
    <fieldset id="confirmation">
        <legend><?php echo __( 'Confirm that CC Licensing is appropriate', 'vocabulary-theme' ); ?></legend>

        <div>
            <input type="checkbox" id="ownership" name="ownership" value="ownership" />
            <label for="ownership"><?php echo __( 'I own or have authority to license the work.', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="checkbox" id="read" name="read" value="read" />
            <label for="read"><?php echo __( 'I have read and understand the terms of the license.', 'vocabulary-theme' ); ?></label>
        </div>

        <div>
            <input type="checkbox" id="revocation" name="revocation" value="revocation" />
            <label for="revocation"><?php echo __( 'I understand that CC licensing is not revocable.', 'vocabulary-theme' ); ?></label>
        </div>

    </fieldset>
    </li>

    <hr />

    <li>
    <fieldset id="attribution-details">
        <legend><?php echo __( 'Attribution details (optional)', 'vocabulary-theme' ); ?></legend>

        <span><?php echo __( 'This helps others attribute your work to you, and fills in machine-readable code.', 'vocabulary-theme' ); ?></span>

        <div>
            <label for="title"><?php echo __( 'Title of work', 'vocabulary-theme' ); ?></label>
            <input type="text" id="title" name="title" placeholder="Untitled" />
        </div>

        <div>
            <label for="creator"><?php echo __( 'Creator of work', 'vocabulary-theme' ); ?></label>
            <input type="text" id="creator" name="creator" placeholder="Jane Doe" />
        </div>

        <div>
            <label for="work-link"><?php echo __( 'Link to work', 'vocabulary-theme' ); ?></label>
            <input type="url" id="work-link" name="work-link" placeholder="https://example.com" />
        </div>

        <div>
            <label for="creator-link"><?php echo __( 'Link to Creator Profile', 'vocabulary-theme' ); ?></label>
            <input type="url" id="creator-link" name="creator-link" placeholder="https://example.com" />
        </div>

        <div>
            <label for="work-creation-year"><?php echo __( 'Year of creation', 'vocabulary-theme' ); ?></label>
            <input type="text" id="work-creation-year" name="work-creation-year" placeholder="1999" />
        </div>

        <div id="tool-rec-details">

            <hr />

            <div>
                <label for="tool-title"><?php echo __( 'Title of recommended tool (read only)', 'vocabulary-theme' ); ?></label>
                <input type="text" id="tool-title" name="tool-title" value="recommended tool title" readonly="true" />
            </div>

            <div>
                <label for="tool-url"><?php echo __( 'URL of recommended tool (read only)', 'vocabulary-theme' ); ?></label>
                <input type="text" id="tool-url" name="tool-url" value="https://creativecommons.org/licenses/by/4.0/" readonly="true" />
            </div>

        </div>


    </fieldset>
    </li>

    </ol>
    </form>

    <!-- <button>submit</button> -->

    <aside>
    <div id="empty">
        <p><?php echo __( 'Waiting for required fields...', 'vocabulary-theme' ); ?></p>
    </div>

    <div id="tool-recommendation">
        <h2><?php echo __( 'Recommended Choice', 'vocabulary-theme' ); ?></h2>

        <article class="tool">

        </article>
    </div>

    <div id="mark-your-work">
        <header>
            <h3><?php echo __( 'Mark Your Work', 'vocabulary-theme' ); ?></h3>
            <p><?php echo __( 'Choose the kind of work to get appropriate license code or public domain marking.', 'vocabulary-theme' ); ?></p>
        </header>

        <details class="medium">

        <summary><?php echo __( 'Website', 'vocabulary-theme' ); ?></summary>

            <p><?php echo __( 'If you are licensing or marking one work, paste the code next to it. If you are licensing or marking the whole page or blog, you can paste the code at the bottom of the page.', 'vocabulary-theme' ); ?></p>

            <article>
                <details class="format" name="website" open>
                <summary><?php echo __( 'Rich Text', 'vocabulary-theme' ); ?></summary>

                    <p class="rich-text mark">[contextually formatted mark here]</p>

                    <footer>
                        <div>
                            <input type="checkbox" id="rich-text-full-name" name="rich-text-full-name" value="rich-text-full-name" />
                            <label for="rich-text-full-name"><?php echo __( 'full tool name', 'vocabulary-theme' ); ?></label>
                        </div>
                        <div>
                            <input type="checkbox" id="rich-text-generic-mark" name="rich-text-generic-mark" value="rich-text-generic-mark" />
                            <label for="rich-text-generic-mark"><?php echo __( 'generic mark', 'vocabulary-theme' ); ?></label>
                        </div>
                        <button id="copy-rich-text-mark"><?php echo __( 'Copy', 'vocabulary-theme' ); ?></button>
                    </footer>
                </details>
            </article>

            <article>
                <details class="format" name="website">
                <summary>HTML</summary>

                    <textarea class="html mark" readonly="true">[contextually formatted mark here]</textarea>

                    <footer>
                        <div>
                            <input type="checkbox" id="html-full-name" name="html-full-name" value="html-full-name" />
                            <label for="html-full-name"><?php echo __( 'full tool name', 'vocabulary-theme' ); ?></label>
                        </div>
                        <div>
                            <input type="checkbox" id="html-generic-mark" name="html-generic-mark" value="html-generic-mark" />
                            <label for="html-generic-mark"><?php echo __( 'generic mark', 'vocabulary-theme' ); ?></label>
                        </div>
                        <button id="copy-html-mark"><?php echo __( 'Copy', 'vocabulary-theme' ); ?></button>
                    </footer>
                </details>
            </article>

        </details>

        <details class="medium">
        <summary><?php echo __( 'Print Work or Media', 'vocabulary-theme' ); ?></summary>

            <p><?php echo __( 'Copy the text below and paste it on the title and/or copyright page of your print work or presentation, or in the credits of your media.', 'vocabulary-theme' ); ?></p>

            <article>
            <details class="format" name="print" open>
                <summary><?php echo __( 'Plain Text', 'vocabulary-theme' ); ?></summary>

                    <p class="plain-text mark">[contextually formatted mark here]</p>

                    <footer>
                        <div>
                            <input type="checkbox" id="plain-text-full-name" name="plain-text-full-name" value="plain-text-full-name" />
                            <label for="plain-text-full-name"><?php echo __( 'full tool name', 'vocabulary-theme' ); ?></label>
                        </div>
                        <div>
                            <input type="checkbox" id="plain-text-generic-mark" name="plain-text-generic-mark" value="plain-text-generic-mark" />
                            <label for="plain-text-generic-mark"><?php echo __( 'generic mark', 'vocabulary-theme' ); ?></label>
                        </div>
                        <button id="copy-plain-text-mark"><?php echo __( 'Copy', 'vocabulary-theme' ); ?></button>
                    </footer>
            </details>
            </article>
        </details>

    </div>

    <div id="help">
        <h2><?php echo __( 'Confused? Need Help?', 'vocabulary-theme' ); ?></h2>

        <details name="help">
            <summary><?php echo __( 'What are Creative Commons licenses?', 'vocabulary-theme' ); ?></summary>
            <p><?php echo __( 'Creative Commons licenses are legal tools that help you grant copyright permissions to the general public. Our CC legal tools include <a href="https://creativecommons.org/licenses/" target="_blank" rel="noopener noreferrer">six different licenses</a> and <a href="https://creativecommons.org/share-your-work/public-domain/cc0/" target="_blank" rel="noopener noreferrer">one public domain dedication tool</a>. It is important to specify which one of the 7 legal tools you are applying to your material. The license chooser can help you decide which license is right for you.', 'vocabulary-theme' ); ?></p>
            <p><?php echo __( 'CC licenses may be applied to any type of copyrightable work. The only types of works for which CC does not recommend its licenses are computer software and hardware, where we recommend a standard free software license instead. For works that are already in the public domain we recommend that you mark them with the <a href="https://creativecommons.org/about/pdm" target="_blank" rel="noopener noreferrer">Public Domain Mark</a>. If you hold the rights to a work but would like to place it into the public domain, you can use the Chooser to select CC0.', 'vocabulary-theme' ); ?></p>
        </details>

        <details name="help">
            <summary><?php echo __( 'How to apply a Creative Commons license', 'vocabulary-theme' ); ?></summary>
            <p><?php echo __( 'You can license your work by marking it with the specific CC license you choose. This marking can be as simple as a bit of text stating the license in a copyright notice, or as complex as embedding the license information on your website using the HTML code associated with the particular license. We strongly recommend including a link to the applicable license (e.g., <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="noopener noreferrer">https://creativecommons.org/licenses/by/4.0/</a>).', 'vocabulary-theme' ); ?></p>
        </details>

        <details name="help">
            <summary><?php echo __( 'What should I consider?', 'vocabulary-theme' ); ?></summary>
            <p><?php echo __( 'As a creator licensing a work, among <a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Considerations_for_licensors" target="_blank" rel="noopener noreferrer">other considerations</a>, you should:', 'vocabulary-theme' ); ?></p>
            <ul>
                <li><a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Remember_the_license_may_not_be_revoked." target="_blank" rel="noopener noreferrer"><?php echo __( 'Remember that once you have applied a CC license, you cannot revoke it', 'vocabulary-theme' ); ?></a>.</li>
                <li><a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Think_about_how_you_want_the_material_to_be_used." target="_blank" rel="noopener noreferrer"><?php echo __( 'Choose your license based on how you want the material to be used', 'vocabulary-theme' ); ?></a>.</li>
                <li><a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Specify_attribution_information_if_desired." target="_blank" rel="noopener noreferrer"><?php echo __( 'Let people know how to credit you (or whether you want credit at all)', 'vocabulary-theme' ); ?></a>.</li>
            </ul>
        </details>

        <details name="help">
            <summary><?php echo __( 'What do the icons mean?', 'vocabulary-theme' ); ?></summary>
            <p> <?php echo __( 'The icons represent key features of the different CC license options: ', 'vocabulary-theme' ); ?></p>
            <dl class="conditions-definitions">
                <div>
                    <dt class="icon-attach cc-by"><?php echo __( 'Attribution Required (BY)', 'vocabulary-theme' ); ?></dt>
                    <dd><?php echo __( 'Credit must be given to you, the creator.', 'vocabulary-theme' ); ?></dd>
                </div>

                <div>
                    <dt class="icon-attach cc-nc"><?php echo __( 'Commercial Use Not Allowed (NC/NonCommercial)', 'vocabulary-theme' ); ?></dt>
                    <dd>
                        <?php echo __( 'Only noncommercial use of your work is permitted.', 'vocabulary-theme' ); ?>
                        <em><?php echo __( 'Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.', 'vocabulary-theme' ); ?></em>
                    </dd>
                </div>

                <div>
                    <dt class="icon-attach cc-sa"><?php echo __( 'Distributed on Same Terms (SA/ShareAlike)', 'vocabulary-theme' ); ?></dt>
                    <dd><?php echo __( 'Copy', 'vocabulary-theme' ); ?>Adaptations must be shared under the same terms.</dd>
                </div>

                <div>
                    <dt class="icon-attach cc-nd"><?php echo __( 'Modifying Not Allowed (ND/NoDerivatives)', 'vocabulary-theme' ); ?></dt>
                    <dd><?php echo __( 'No derivatives or adaptations of your work are permitted.', 'vocabulary-theme' ); ?></dd>
                </div>
            </dl>
        </details>

        <details name="help">
            <summary><?php echo __( 'What if I have other questions?', 'vocabulary-theme' ); ?></summary>
            <p><?php echo __( 'You can find a full list of our <a href="https://creativecommons.org/faq/" target="_blank" rel="noopener noreferrer">frequently asked questions</a> on our site.', 'vocabulary-theme' ); ?></p>
            <p><?php echo __( 'If you would like peer support in learning the best way to utilize this resource or choosing the best legal tool for you, you can become a part of CC’s Community by filling out the <a href="https://docs.google.com/forms/d/e/1FAIpQLSf2HY_wHq5SlgP_0U0ZWQKGXKwocNhm_vCPY34bUQrQ_hWoAQ/viewform?usp=dialog">Creative Commons Community Intake Form</a>. You should receive an invitation to our chat platform, Zulip, in 5-10 business days..', 'vocabulary-theme' ); ?></p>
        </details>

    </div>
    </aside>


</div>

</main>

<template id="cc-0" class="tool mark">
    <header>
        <h3>CC0 1.0</h3>
        <span class="tool-icons">
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-zero"></use>
            </svg>
        </span>
        <h4>CC0 1.0 Universal</h4>
    </header>

    <div class="description">
        <p>By marking the work with a CC0 public domain dedication, the creator is giving up their copyright and allowing reusers to distribute, remix, adapt, and build upon the material in any medium or format, even for commercial purposes.</p>
    </div>

    <dl class="conditions-definitions">
        <div>
            <dt class="icon-attach cc-zero">CC0</dt>
            <dd>This work has been marked as dedicated to the public domain.</dd>
        </div>
    </dl>

    <a href="https://creativecommons.org/publicdomain/zero/1.0/">See the License Deed</a>
</template>

<template id="cc-by" class="tool license">
    <header>
        <h3>CC-BY 4.0</h3>
        <span class="tool-icons">
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
            </svg>
        </span>
        <h4>Creative Commons Attribution 4.0 International</h4>
    </header>

    <div class="description">
        <p>This license requires that reusers give credit to the creator. It allows reusers to distribute, remix, adapt, and build upon the material in any medium or format, even for commercial purposes.</p>
    </div>

    <dl class="conditions-definitions">
        <div>
            <dt class="icon-attach cc-by">BY</dt>
            <dd>Credit must be given to you, the creator.</dd>
        </div>
    </dl>

    <a href="https://creativecommons.org/licenses/by/4.0/">See the License Deed</a>
</template>

<template id="cc-by-sa" class="tool license">
    <header>
        <h3>CC BY-SA 4.0</h3>
        <span class="tool-icons">
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-sa"></use>
            </svg>
        </span>
        <h4>Creative Commons Attribution-ShareAlike 4.0 International</h4>
    </header>

    <div class="description">
        <p>This license requires that reusers give credit to the creator. It allows reusers to distribute, remix, adapt, and build upon the material in any medium or format, even for commercial purposes. If others remix, adapt, or build upon the material, they must license the modified material under identical terms.</p>
    </div>

    <dl class="conditions-definitions">
        <div>
            <dt class="icon-attach cc-by">BY</dt>
            <dd>Credit must be given to you, the creator.</dd>
        </div>

        <div>
            <dt class="icon-attach cc-sa">SA</dt>
            <dd>Adaptations must be shared under the same terms.</dd>
        </div>
    </dl>

    <a href="https://creativecommons.org/licenses/by-sa/4.0/">See the License Deed</a>
</template>

<template id="cc-by-nd" class="tool license">
    <header>
        <h3>CC BY-ND 4.0</h3>
        <span class="tool-icons">
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-nd"></use>
            </svg>
        </span>
        <h4>Creative Commons Attribution-NoDerivatives 4.0 International</h4>
    </header>

    <div class="description">
        <p>This license requires that reusers give credit to the creator. It allows reusers to copy and distribute the material in any medium or format in unadapted form only, even for commercial purposes.</p>
    </div>

    <dl class="conditions-definitions">

        <div>
            <dt class="icon-attach cc-by">BY</dt>
            <dd>Credit must be given to you, the creator.</dd>
        </div>

        <div>
            <dt class="icon-attach cc-nd">ND</dt>
            <dd>No derivatives or adaptations of your work are permitted.</dd>
        </div>
    </dl>

    <a href="https://creativecommons.org/licenses/by-nd/4.0/">See the License Deed</a>
</template>

<template id="cc-by-nc" class="tool license">
    <header>
        <h3>CC BY-NC 4.0</h3>
        <span class="tool-icons">
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-nc"></use>
            </svg>
        </span>
        <h4>Creative Commons Attribution-NonCommercial 4.0 International</h4>
    </header>

    <div class="description">
        <p>This license requires that reusers give credit to the creator. It allows reusers to distribute, remix, adapt, and build upon the material in any medium or format, for noncommercial purposes only.</p>
    </div>

    <dl class="conditions-definitions">
        <div>
            <dt class="icon-attach cc-by">BY</dt>
            <dd>Credit must be given to you, the creator.</dd>
        </div>

        <div>
            <dt class="icon-attach cc-nc">NC</dt>
            <dd>
                Only noncommercial use of your work is permitted.
                <em>Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</em>
            </dd>
        </div>


    </dl>

    <a href="https://creativecommons.org/licenses/by-nc/4.0/">See the License Deed</a>
</template>

<template id="cc-by-nc-sa" class="tool license">
    <header>
        <h3>CC BY-NC-SA 4.0</h3>
        <span class="tool-icons">
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/ocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-nc"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-sa"></use>
            </svg>
        </span>
        <h4>Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International</h4>
    </header>

    <div class="description">
        <p>This license requires that reusers give credit to the creator. It allows reusers to distribute, remix, adapt, and build upon the material in any medium or format, for noncommercial purposes only. If others modify or adapt the material, they must license the modified material under identical terms.</p>
    </div>

    <dl class="conditions-definitions">
        <div>
            <dt class="icon-attach cc-by">BY</dt>
            <dd>Credit must be given to you, the creator.</dd>
        </div>

        <div>
            <dt class="icon-attach cc-nc">NC</dt>
            <dd>
                Only noncommercial use of your work is permitted.
                <em>Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</em>
            </dd>
        </div>

        <div>
            <dt class="icon-attach cc-sa">SA</dt>
            <dd>Adaptations must be shared under the same terms.</dd>
        </div>
    </dl>

    <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">See the License Deed</a>
</template>

<template id="cc-by-nc-nd" class="tool license">
    <header>
        <h3>CC BY-NC-ND 4.0</h3>
        <span class="tool-icons">
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-logo"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-by"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-nc"></use>
            </svg>
            <svg>
                <use href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/svg/cc/icons/cc-icons.svg#cc-nd"></use>
            </svg>
        </span>
        <h4>Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International</h4>
    </header>

    <div class="description">
        <p>This license requires that reusers give credit to the creator. It allows reusers to copy and distribute the material in any medium or format in unadapted form and for noncommercial purposes only.</p>
    </div>

    <dl class="conditions-definitions">
        <div>
            <dt class="icon-attach cc-by">BY</dt>
            <dd>Credit must be given to you, the creator.</dd>
        </div>

        <div>
            <dt class="icon-attach cc-nc">NC</dt>
            <dd>
                Only noncommercial use of your work is permitted.
                <em>Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</em>
            </dd>
        </div>

        <div>
            <dt class="icon-attach cc-nd">ND</dt>
            <dd>No derivatives or adaptations of your work are permitted.</dd>
        </div>
    </dl>

    <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/">See the License Deed</a>
</template>

<template id="plain-text" class="mark">
    <p>{{title}} {{copyright}} by {{creator}} is {{typeAsVerb}} {{toolName}}. To view a copy of this {{type}}, visit {{toolURL}}</p>
</template>

<template id="plain-text-generic" class="mark">
    <p>This work is {{typeAsVerb}} {{toolName}}. To view a copy of this {{type}}, visit {{toolURL}}</p>
</template>

<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/chooser/js/chooser.js"></script>

<?php get_footer(); ?>
