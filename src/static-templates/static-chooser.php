<?php get_header('', array( 'body-classes' => 'chooser-page') ); ?>

<main>

<header>

<h1>Choose a License for Your Work</h1>

<p>Follow the steps to select the appropriate license for your work. <br /> This site does not store any information.</p>


</header>


<div class="content">

    <form id="chooser">

    <ol>
 
    <li>
    <fieldset id="do-you-know-which-license-you-need">
        <legend>Do you know which license you need?</legend>
        <!-- <legend>Choose a License</legend> -->


        <div>
            <input type="radio" id="yes-choose" name="choose" value="yes" checked />
            <label for="yes-choose">Yes</label>
        </div>

        <div>
            <input type="radio" id="no-choose" name="choose" value="no" />
            <label for="no-choose">No</label>
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
        <legend>Which license do you need?</legend>

        <label for="tool">License</label>
        <select name="tool" id="tool">
            <option value="noselect" selected>&mdash;choose a license&mdash;</option>
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
        <legend>Attribution?</legend>

        <div>
            <input type="radio" id="yes-attribution" name="attribution" value="yes" />
            <label for="yes-attribution">Yes</label>
        </div>

        <div>
            <input type="radio" id="no-attribution" name="attribution" value="no" />
            <label for="no-attribution">No</label>
        </div>

    </fieldset>
    </li>


    <li>
    <fieldset id="allow-commercial-use">
        <legend>Commercial Use?</legend>

        <div>
            <input type="radio" id="yes-commercial" name="commercial" value="yes" />
            <label for="yes-commercial">Yes</label>
        </div>

        <div>
            <input type="radio" id="no-commercial" name="commercial" value="no" />
            <label for="no-commercial">No</label>
        </div>

    </fieldset>
    </li>

    <li>
    <fieldset id="allow-derivatives">
        <legend>Derivative Works?</legend>

        <div>
            <input type="radio" id="yes-derivatives" name="derivatives" value="yes" />
            <label for="yes-derivatives">Yes</label>
        </div>

        <div>
            <input type="radio" id="no-derivatives" name="derivatives" value="no" />
            <label for="no-derivatives">No</label>
        </div>

    </fieldset>
    </li>

    <li>
    <fieldset id="share-alike">
        <legend>Sharing Requirements?</legend>

        <div>
            <input type="radio" id="yes-sharing-requirements" name="sharing-requirements" value="yes" />
            <label for="yes-sharing-requirements">Yes</label>
        </div>

        <div>
            <input type="radio" id="no-sharing-requirements" name="sharing-requirements" value="no" />
            <label for="no-sharing-requirements">No</label>
        </div>

    </fieldset>
    </li>

    <!-- <hr /> -->

    <li>
    <fieldset id="waive-your-copyright">
        <legend>Waive your copyright</legend>
        <!-- [T]: needs another box here to verify ownership similar to "confirmation" -->

        <div>
            <input type="checkbox" id="waive" name="waive" value="waive" />
            <label for="waive">I hereby waive all copyright and related or neighboring rights together with all associated claims and causes of action with respect to this work to the extent possible under the law.</label>
        </div>

        <div>
            <input type="checkbox" id="read" name="read" value="read" />
            <label for="read">I have read and understand the terms and intended legal effect of CC0, and hereby voluntarily elect to apply it to this work.</label>
        </div>

    </fieldset>
    </li>

    <li>
    <fieldset id="confirmation">
        <legend>Confirm that CC Licensing is appropriate</legend>

        <div>
            <input type="checkbox" id="ownership" name="ownership" value="ownership" />
            <label for="ownership">I own or have authority to license the work.</label>
        </div>

        <div>
            <input type="checkbox" id="read" name="read" value="read" />
            <label for="read">I have read and understand the terms of the license.</label>
        </div>

        <div>
            <input type="checkbox" id="revocation" name="revocation" value="revocation" />
            <label for="revocation">I understand that CC licensing is not revocable.</label>
        </div>

    </fieldset>
    </li>

    <hr />

    <li>
    <fieldset id="attribution-details">
        <legend>Attribution details (optional)</legend>

        <span>This helps others attribute your work to you, and fills in machine-readable code.</span>

        <div>
            <label for="title">Title of work</label>
            <input type="text" id="title" name="title" placeholder="Untitled" />
        </div>

        <div>
            <label for="creator">Creator of work</label>
            <input type="text" id="creator" name="creator" placeholder="Jane Doe" />
        </div>

        <div>
            <label for="work-link">Link to work</label>
            <input type="url" id="work-link" name="work-link" placeholder="https://creativecommons.org" />
        </div>

        <div>
            <label for="creator-link">Link to Creator Profile</label>
            <input type="url" id="creator-link" name="creator-link" placeholder="https://creativecommons.org" />
        </div>

        <div>
            <label for="work-creation-year">Year of creation</label>
            <input type="text" id="work-creation-year" name="work-creation-year" placeholder="1999" />
        </div>

        <div id="tool-rec-details">

            <hr />

            <div>
                <label for="tool-title">Title of recommended tool (read only)</label>
                <input type="text" id="tool-title" name="tool-title" value="recommended tool title" readonly="true" />
            </div>

            <div>
                <label for="tool-url">URL of recommended tool (read only)</label>
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
        <p>Waiting for required fields...</p>
    </div>

    <div id="tool-recommendation">
        <h2>Recommended Choice</h2>

        <article class="tool">

        </article>
    </div>

    <div id="mark-your-work">
        <header>
            <h3>Mark Your Work</h3>
            <p>Choose the kind of work to get appropriate license code or public domain marking.</p>
        </header>

        <details class="medium">

        <summary>Website</summary>

            <p>If you are licensing or marking one work, paste the code next to it. If you are licensing or marking the whole page or blog, you can paste the code at the bottom of the page.</p>

            <article>
                <details class="format" name="website" open>
                <summary>Rich Text</summary>

                    <p class="rich-text mark">[contextually formatted mark here]</p>

                    <footer>
                        <div>
                            <input type="checkbox" id="rich-text-full-name" name="rich-text-full-name" value="rich-text-full-name" />
                            <label for="rich-text-full-name">full tool name</label>
                        </div>
                        <button id="copy-rich-text-mark">Copy</button>
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
                            <label for="html-full-name">full tool name</label>
                        </div>
                        <button id="copy-html-mark">Copy</button>
                    </footer>
                </details>
            </article>

        </details>
     
        <details class="medium">
        <summary>Print Work or Media</summary>

            <p>Copy the text below and paste it on the title and/or copyright page of your print work or presentation, or in the credits of your media.</p>

            <article>
            <details class="format" name="print" open>
                <summary>Plain Text</summary>

                    <p class="plain-text mark">[contextually formatted mark here]</p>

                    <footer>
                        <div>
                            <input type="checkbox" id="plain-text-full-name" name="plain-text-full-name" value="plain-text-full-name" />
                            <label for="plain-text-full-name">full tool name</label>
                        </div>
                        <button id="copy-plain-text-mark">Copy</button>
                    </footer>
            </details>
            </article>
        </details>

    </div>

    <div id="help">
        <h2>Confused? Need Help?</h2>

        <details name="help">
            <summary>What are Creative Commons licenses?</summary>
            <p>Creative Commons licenses are legal tools that help you grant copyright permissions to the general public. Our CC legal tools include <a href="https://creativecommons.org/licenses/" target="_blank" rel="noopener noreferrer">six different licenses</a> and <a href="https://creativecommons.org/share-your-work/public-domain/cc0/" target="_blank" rel="noopener noreferrer">one public domain dedication tool</a>. It is important to specify which one of the 7 legal tools you are applying to your material. The license chooser can help you decide which license is right for you.</p>
            <p>CC licenses may be applied to any type of copyrightable work. The only types of works for which CC does not recommend its licenses are computer software and hardware, where we recommend a standard free software license instead. For works that are already in the public domain we recommend that you mark them with the <a href="https://creativecommons.org/about/pdm" target="_blank" rel="noopener noreferrer">Public Domain Mark</a>. If you hold the rights to a work but would like to place it into the public domain, you can use the Chooser to select CC0.</p>
        </details>

        <details name="help">
            <summary>How to apply a Creative Commons license</summary>
            <p>You can license your work by marking it with the specific CC license you choose. This marking can be as simple as a bit of text stating the license in a copyright notice, or as complex as embedding the license information on your website using the HTML code associated with the particular license. We strongly recommend including a link to the applicable license (e.g., <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="noopener noreferrer">https://creativecommons.org/licenses/by/4.0/</a>).</p>
        </details>

        <details name="help">
            <summary>What should I consider?</summary>
            <p>As a creator licensing a work, among <a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Considerations_for_licensors" target="_blank" rel="noopener noreferrer">other considerations</a>, you should:</p>
            <ul>
                <li><a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Remember_the_license_may_not_be_revoked." target="_blank" rel="noopener noreferrer">Remember that once you have applied a CC license, you cannot revoke it</a>.</li>
                <li><a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Think_about_how_you_want_the_material_to_be_used." target="_blank" rel="noopener noreferrer">Choose your license based on how you want the material to be used</a>.</li>
                <li><a href="https://wiki.creativecommons.org/wiki/Considerations_for_licensors_and_licensees#Specify_attribution_information_if_desired." target="_blank" rel="noopener noreferrer">Let people know how to credit you (or whether you want credit at all)</a>.</li>
            </ul>
        </details>

        <details name="help">
            <summary>What do the icons mean?</summary>
            <p> The icons represent key features of the different CC license options: </p>
            <dl class="conditions-definitions">
                <div>
                    <dt class="icon-attach cc-by">Attribution Required (BY)</dt>
                    <dd>Credit must be given to you, the creator.</dd>
                </div>
     
                <div>
                    <dt class="icon-attach cc-nc">Commercial Use Not Allowed (NC/NonCommercial)</dt>
                    <dd>
                        Only noncommercial use of your work is permitted.
                        <em>Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</em>
                    </dd>
                </div>
     
                <div>
                    <dt class="icon-attach cc-sa">Distributed on Same Terms (SA/ShareAlike)</dt>
                    <dd>Adaptations must be shared under the same terms.</dd>
                </div>

                <div>
                    <dt class="icon-attach cc-nd">Modifying Not Allowed (ND/NoDerivatives)</dt>
                    <dd>No derivatives or adaptations of your work are permitted.</dd>
                </div>
            </dl>
        </details>

        <details name="help">
            <summary>What if I have other questions?</summary>
            <p>You can find a full list of our <a href="https://creativecommons.org/faq/" target="_blank" rel="noopener noreferrer">frequently asked questions</a> on our site. If your questions or concerns are not answered there, you can email us at <a href="mailto:legal@creativecommons.org" target="_blank" rel="noopener noreferrer">legal@creativecommons.org</a>.</p>
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

<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/chooser/js/chooser.js"></script>


<?php get_footer(); ?>
