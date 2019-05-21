#include <stdio.h>
#include <string.h>
#include<stdlib.h>
int main()
{
    char a[20];
    int l,i,num=0;
    gets(a);
    //scanf("%d",&a);
    l=strlen(a);
    for(i=0;i<l;i++)
    {
        if(a[i]>=48&&a[i]<=57||a[i]==46)
        {
            num=num+1;
        }
        else
        {
            num=0;
            printf("No");
            return 0;
        }
    }
    if(num>0)
    {
        printf("yes");
    }
    else
    {
        printf("No");
    }
    return 0;
}
