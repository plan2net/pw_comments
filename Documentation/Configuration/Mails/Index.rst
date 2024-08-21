.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt

.. _mails:

Mails to comment author
=======================

.. important::
   When you want to work with mail notifications, you should configure an absolute URL (like ``https://my-domain.com/``) in
   TYPO3's **site configuration** instead of a plain ``/``. This is required by TypoLink to create absolute URLs in mails.

=====================================       ========
Property                                      Type
=====================================       ========
senderAddress_                               string
senderName_                                  string
sendMailToAuthorAfterSubmit_                 boolean
sendMailToAuthorAfterSubmitTemplate_         string
sendMailToAuthorAfterSubmitUpdateTemplate_   string
sendMailToAuthorAfterPublish_                boolean
sendMailToAuthorAfterPublishTemplate_        string
sendMailOnNewCommentsToNewsAuthor_           boolean
sendMailNewsAuthorTemplate_                  string
sendMailNewsAuthorUpdateTemplate_            string
sendMailOnNewCommentsOnCommentsToOriginalAuthor_ boolean
sitenameUsedInMails_                         string
=====================================       ========

.. _senderAddress:

senderAddress
"""""""""""""""""""""""""""
.. container:: table-row

   Property
      senderAddress
   Data type
      string
   Description
      Sender's mail address when pw_comments sends out mails.

.. _senderName:

senderName
"""""""""""""""""""""""""""
.. container:: table-row

   Property
      senderName
   Data type
      string
   Description
      Name to display in mail clients, instead of mail address. (optional)

.. _sendMailToAuthorAfterSubmit:

sendMailToAuthorAfterSubmit
"""""""""""""""""""""""""""
.. container:: table-row

   Property
      sendMailToAuthorAfterSubmit
   Data type
      boolean
   Default
      0
   Description
      If this option is enabled, the author receives a mail after each comment he/she has written.

.. _sendMailToAuthorAfterSubmitTemplate:

sendMailToAuthorAfterSubmitTemplate
"""""""""""""""""""""""""""""""""""
.. container:: table-row

   Property
      sendMailToAuthorAfterSubmitTemplate
   Data type
      string
   Default
      EXT:pw_comments/[...]/mailToAuthorAfterSubmit.html
   Description
      Defines the path to the Fluid template which should be used for the e-mail to comment author.

.. _sendMailToAuthorAfterSubmitUpdateTemplate:

sendMailToAuthorAfterSubmitUpdateTemplate
"""""""""""""""""""""""""""""""""""
.. container:: table-row

   Property
      sendMailToAuthorAfterSubmitUpdateTemplate
   Data type
      string
   Default
      EXT:pw_comments/[...]/mailToAuthorAfterUpdateSubmit.html
   Description
      Defines the path to the Fluid template which should be used for the e-mail to comment author on editing.

.. _sendMailToAuthorAfterPublish:

sendMailToAuthorAfterPublish
""""""""""""""""""""""""""""
.. container:: table-row

   Property
      sendMailToAuthorAfterPublish
   Data type
      boolean
   Default
      0
   Description
      	If this option is enabled, the author receives a mail after a comment he/she has written has been published.
      	This option requires activated "moderateNewComments".

.. _sendMailToAuthorAfterPublishTemplate:

sendMailToAuthorAfterPublishTemplate
""""""""""""""""""""""""""""""""""""
.. container:: table-row

   Property
      sendMailToAuthorAfterPublishTemplate
   Data type
      string
   Default
      EXT:pw_comments/[...]/mailToAuthorAfterPublish.html
   Description
      Defines the path to the Fluid template which should be used for the e-mail to comment author.

.. _sendMailOnNewCommentsToNewsAuthor:

sendMailOnNewCommentsToNewsAuthor
"""""""""""""""""""
.. container:: table-row

   Property
      sendMailOnNewCommentsToNewsAuthor
   Data type
      boolean
   Description
      If this option is enabled, the author of the news article commented on receives a mail after a comment has been published.

.. _sendMailNewsAuthorTemplate:

sendMailNewsAuthorTemplate
""""""""""""""""""""""""""
.. container:: table-row

   Property
      sendMailNewsAuthorTemplate
   Data type
      string
   Default
      EXT:pw_comments/[...]/newsMail.html
   Description
      Defines the path to the Fluid template which should be used for the e-mail to comment author.

.. _sendMailNewsAuthorUpdateTemplate:

sendMailToAuthorAfterSubmitTemplate
"""""""""""""""""""""""""""""""""""
.. container:: table-row

   Property
      sendMailNewsAuthorUpdateTemplate
   Data type
      string
   Default
      EXT:pw_comments/[...]/updateNewsMail.html
   Description
      Defines the path to the Fluid template which should be used for the e-mail to comment author.

.. _sendMailOnNewCommentsOnCommentsToOriginalAuthor:

sendMailOnNewCommentsOnCommentsToOriginalAuthor
"""""""""""""""""""
.. container:: table-row

   Property
      sendMailOnNewCommentsOnCommentsToOriginalAuthor
   Data type
      boolean
   Description
      If this option is enabled, the author of the parent comment receives a mail after a comment has been published.

.. _sitenameUsedInMails:

sitenameUsedInMails
"""""""""""""""""""
.. container:: table-row

   Property
      sitenameUsedInMails
   Data type
      string
   Description
      When this option is set, it replaces the getHostname() output, used in mail subject.

