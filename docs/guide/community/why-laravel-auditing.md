---
sidebarDepth: 2
---

<div class="flex justify-center my-10">
  <img src="/logo.svg" alt="Laravel Auditing logo" class="max-h-[256px]">
</div>

# Why Laravel Auditing?

## Overview

> The Laravel Auditing package is a powerful tool for developers who need to maintain strict control over the data in their applications. By providing detailed auditing capabilities for Eloquent models, this package helps developers to detect potential issues and ensure that their applications are running smoothly and securely.

Laravel Auditing is a powerful package for Laravel developers that allows them to easily audit changes made to Eloquent models in their applications. With this package, you can keep track of every change that occurs in your models, including the creation, modification, and deletion of records, as well as any changes to their attributes.

The Auditing package provides a number of useful features that make it easy to customize and control the auditing process. For example, the package includes an Auditor class that can be used to audit and clear audit records, as well as Modifiers that allow you to modify attributes before they are audited. This is particularly useful for handling sensitive data, which can be omitted or modified using this feature.

In addition, the package provides a variety of presentation options, which allow you to access metadata and modified data in several different ways. Resolvers provide a convenient way to get the basic data for audit, while drivers handle the storage and pruning of audit records.

The package also includes Transformation functionality, which allows you to transform audit data before it is stored. This can be useful if you need to reformat the data for compatibility with another system, for example.

Tags are another useful feature of the Laravel Auditing package. Tags allow you to mark audit logs and make them easy to filter and sort, which can be particularly useful for large applications with many audit records.

Finally, the package includes an Events system, which provides a simple observer pattern implementation, allowing you to subscribe and listen to audit events. This can be particularly useful for triggering custom actions or notifications based on specific audit events.

Overall, the Laravel Auditing package is a powerful tool for developers who need to maintain strict control over the data in their applications. By providing detailed auditing capabilities for Eloquent models, this package helps developers to detect potential issues and ensure that their applications are running smoothly and securely.


## Why should I use Laravel Auditing?

There are several reasons why you might want to use Laravel Auditing in your application:

- **Auditing**: Laravel Auditing allows you to easily track changes to your Eloquent models. This can be useful for auditing purposes, as well as for detecting potential security breaches or other issues.

- **Customizable**: The package is highly customizable, with a wide range of features that allow you to control the auditing process to suit your specific needs. For example, you can modify attributes before they are audited, and transform audit data to fit your requirements.

- **Flexible storage**: The package supports multiple storage options, including database, Elasticsearch, and MongoDB. This means you can choose the storage option that best suits your needs and infrastructure.

- **Efficient**: Laravel Auditing is designed to be efficient and performant, with minimal impact on your application's performance.

- **Easy to use**: The package is easy to install and configure, with a simple API that makes it easy to audit your models with just a few lines of code.

- **Notifications**: The Events system in Laravel Auditing allows you to trigger custom actions or notifications based on specific audit events. This can be particularly useful for keeping track of critical changes or responding to potential security issues.

## Features

Here are some highlights of our favorite features:

### Auditor

The Auditor class is responsible for auditing and clearing Audit records.

### Modifiers

Allows you to modify attributes before being audited. Sensitive data can be omitted or modified using this feature.

### Presentation

The metadata and modified data can be accessed in several ways.

### Resolvers

Resolvers provide a convenient way to get the basic data for audit.

### Drivers

Besides storing model attribute changes, drivers also handle pruning when an audit threshold is set.

### Transformation

If needed, the Audit data can be transformed before being stored.

### Tags

Tags mark audit logs and are very useful for filtering.

### Events

Auditing's events provide a simple observer pattern implementation, allowing you to subscribe and listen to the audit events.

### Transition

Ability use an Audit record to transition between the states of an Auditable model.

## Meet the team

<MeetTeam class="mb-24" />
